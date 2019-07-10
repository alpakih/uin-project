<?php


namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Corousel;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Datatables;
use Validator;

class CorouselController extends Controller
{
    private $model;
    private $imageModel;

    public function __construct()
    {
        parent::__construct();
        $this->menu = trans('menu.corousel.name');
        $this->route = $this->routes['backend'] . 'corousel';
        $this->slug = $this->slugs['backend'] . 'corousel';
        $this->view = $this->views['backend'] . 'cms.banner';
        $this->breadcrumb = '<li><a href="' . route($this->route . '.index') . '">' . $this->menu . '</a></li>';
        # share parameters
        $this->share();
        # init model
        $this->model = new Corousel();
        $this->imageModel = new Images();
    }

    public function index()
    {
        try {
            $breadcrumb = $this->breadcrumbs($this->breadcrumb . '<li class="active">' . trans('label.view') . '</li>');
        } catch (\Exception $e) {
            abort(500);
        }
        return view($this->view . '.index', compact('breadcrumb'));
    }

    public function datatables()
    {
        try {
            $data = numrows($this->model->sql()->get());
            return Datatables::of($data)
                ->addColumn('action', function ($data) {
                    $action = null;
                    if (check_access('detail', $this->slug)) {
                        $action .= '<a data-href="' . route($this->route . '.detail', encodeids($data->id)) . '" class="btn btn-xs btn-success btn-modal-action" title="' . trans('label.detail') . '" data-title="' . trans('form.detail', ['menu' => $this->menu]) . '" data-icon="fa fa-search fa-fw" data-background="modal-primary">' . trans('icon.detail') . '</a>';
                    }
                    if (check_access('update', $this->slug)) {
                        $action .= '<a data-href="' . route($this->route . '.edit', encodeids($data->id)) . '" class="btn btn-xs btn-primary btn-modal-form" title="' . trans('label.edit') . '" data-title="' . trans('form.edit', ['menu' => $this->menu]) . '" data-icon="fa fa-edit fa-fw" data-background="modal-primary">' . trans('icon.edit') . '</a>';
                    }
                    if (check_access('delete', $this->slug)) {
                        $action .= '<a data-href="' . route($this->route . '.delete', encodeids($data->id)) . '" class="btn btn-xs btn-danger btn-modal-action" title="' . trans('label.delete') . '" data-title="' . trans('form.delete', ['menu' => $this->menu]) . '" data-icon="fa fa-trash-o fa-fw" data-background="modal-danger">' . trans('icon.delete') . '</a>';
                    }
                    return $action;
                })
                ->editColumn('image', function ($data) {
                    return '<img src=' . asset(Storage::url($data->corousel_image->image)) . ' width="100px">';
                }
                )
                ->make(true);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function detail($id)
    {
        try {
            $id = decodeids($id);
            $data = $this->model->sql()->findOrFail($id);
        } catch (\Exception $e) {
            abort(500);
        }
        return view($this->view . '.form.detail', compact('data'));
    }

    public function create()
    {

        return view($this->view . '.form.create');
    }

    public function store(Request $request)
    {

        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'description' => 'required|max:255',
                'image_id' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->route($this->route . '.create')
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = $this->model;
            if ($request->file() != null) {
                foreach ($request->file() as $key => $file) {
                    if ($request->hasFile($key)) {
                        if ($request->file($key)->isValid()) {
                            $path = $file->store('images/banner', 'public');
                            $key_id = $this->imageModel->create(['image' => $path])->id;
                            $data->$key = $key_id;
                        }
                    } else {
                        $key_id = !empty($request->$key . '_old') ? $request->$key . '_old' : null;
                        $data->$key = $key_id;
                    }
                }
            }

            $data->name = $request->name;
            $data->description = $request->description;
            $data->save();


            action_message('create', $this->menu);
        } catch (\Exception $e) {
            abort(500);
        }
        return json_encode(['redirect' => route($this->route . '.index')]);
    }

    public function edit($id)
    {
        try {
            $id = decodeids($id);
            $data = $this->model->sql()->findOrFail($id);

        } catch (\Exception $e) {
            abort(500);
        }
        return view($this->view . '.form.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try {
            $id = decodeids($id);
            $data = $this->model->sql()->findOrFail($id);

            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'description' => 'required|max:255',
                'image_id' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->route($this->route . '.edit', encodeids($id))
                    ->withErrors($validator)
                    ->withInput();
            }

            if ($request->file() != null) {
                foreach ($request->file() as $key => $file) {
                    if ($request->hasFile($key)) {
                        if ($request->file($key)->isValid()) {
                            if (!is_null($data->image_id) || !empty($data->image_id)) {
                                unlink('.' . Storage::url($data->corousel_image->image));
                                $path = $file->store('images/banner', 'public');
                                $data->corousel_image->update(['image' => $path]);
                                $data->$key = $data->corousel_image->id;
                            } else {
                                $path = $file->store('images/banner', 'public');
                                $key_id = $this->imageModel->create(['image' => $path])->id;
                                $data->$key = $key_id;
                            }
                        }
                    } else {
                        $key_id = !empty($request->$key . '_old') ? $request->$key . '_old' : null;
                        $data->$key = $key_id;
                    }
                }
            }

            $data->name = $request->name;
            $data->description = $request->description;
            $data->update();

            action_message('update', $this->menu);
        } catch (\Exception $e) {
            abort(500);
        }
        return json_encode(['redirect' => route($this->route . '.index')]);
    }

    public function delete($id)
    {
        try {
            $id = decodeids($id);
            $data = $this->model->sql()->findOrFail($id);
        } catch (\Exception $e) {
            abort(500);
        }
        return view($this->view . '.form.delete', compact('data'));
    }

    public function destroy($id)
    {
        try {
            $id = decodeids($id);
            $data = $this->model->findOrFail($id);
            if (!is_null($data->image_id) || !empty($data->image_id)) {
                unlink('.' . Storage::url($data->corousel_image->image));
                $data->corousel_image->delete(['id' => $data->image_id]);

            }
            $data->delete();
            action_message('delete', $this->menu);
        } catch (\Exception $e) {
            abort(500);
        }
        return redirect()->route($this->route . '.index');
    }
}