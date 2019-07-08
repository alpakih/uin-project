<?php


namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Kelas;
use App\Models\Semester;
use App\Models\Students;
use Illuminate\Http\Request;

use Datatables;
use Illuminate\Support\Facades\Storage;
use Validator;

class StudentController extends Controller
{
    private $kelasModel;
    private $semesterModel;
    private $imageModel;

    public function __construct()
    {
        parent::__construct();
        $this->menu = trans('menu.student.name');
        $this->route = $this->routes['backend'] . 'student';
        $this->slug = $this->slugs['backend'] . 'student';
        $this->view = $this->views['backend'] . 'students';
        $this->breadcrumb = '<li><a href="' . route($this->route . '.index') . '">' . $this->menu . '</a></li>';
        # share parameters
        $this->share();
        # init model
        $this->model = new Students();
        $this->kelasModel = new Kelas();
        $this->semesterModel = new Semester();
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

        $kelass = $this->kelasModel->orderBy('name')->get();
        $semesters = $this->semesterModel->orderBy('name')->get();
        return view($this->view . '.form.create', compact('kelass', 'semesters'));
    }

    public function store(Request $request)
    {

        try {
            $validator = Validator::make($request->all(), [
                'nim' => 'required|max:255',
                'nama' => 'required|max:255',
                'no_hp' => 'required',
                'kelas_id' => 'required',
                'semester_id' => 'required',
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
                            $path = $file->store('images/student', 'public');
                            $key_id = $this->imageModel->create(['image' => $path])->id;
                            $data->$key = $key_id;
                        }
                    } else {
                        $key_id = !empty($request->$key . '_old') ? $request->$key . '_old' : null;
                        $data->$key = $key_id;
                    }
                }
            }

            $data->nim = $request->nim;
            $data->nama = $request->nama;
            $data->no_hp = $request->no_hp;
            $data->anak_ke = $request->anak_ke;
            $data->pekerjaan_ortu = $request->pekerjaan_ortu;
            $data->penghasilan_ortu = $request->penghasilan_ortu;
            $data->kelas_id = $request->kelas_id;
            $data->semester_id = $request->semester_id;
            $data->angkatan = $request->angkatan;
            $data->alamat = $request->alamat;
            $data->alamat_domisili = $request->alamat_domisili;

            $data->email = $request->email;
            $data->password = $request->password;

            $data->save();


            action_message('create', $this->menu);
        } catch (\Exception $e) {
            abort(500);
        }
        return redirect()->route($this->route . '.index');

    }

    public function edit($id)
    {
        try {
            $id = decodeids($id);
            $data = $this->model->findOrFail($id);
            $kelass = $this->kelasModel->orderBy('name')->get();
            $semesters = $this->semesterModel->orderBy('name')->get();
        } catch (\Exception $e) {
            abort(500);
        }
        return view($this->view . '.form.edit', compact('data', 'kelass', 'semesters'));
    }

    public function update(Request $request, $id)
    {
        try {
            $id = decodeids($id);
            $data = $this->model->findOrFail($id);

            $validator = Validator::make($request->all(), [
                'nim' => 'required|max:255',
                'nama' => 'required|max:255',
                'no_hp' => 'required',
                'kelas_id' => 'required',
                'semester_id' => 'required',
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
                            if (!is_null($data->image_barang) || !empty($data->image_barang)) {
                                unlink('.' . Storage::url($data->image->image));
                                $path = $file->store('images/student', 'public');
                                $data->student_image->update(['image' => $path]);
                                $data->$key = $data->image->id;
                            } else {
                                $path = $file->store('images/student', 'public');
                                $key_id = $data->student_image->create(['image' => $path])->id;
                                $data->$key = $key_id;
                            }
                        }
                    } else {
                        $key_id = !empty($request->$key . '_old') ? $request->$key . '_old' : null;
                        $data->$key = $key_id;
                    }
                }
            }
            $data->nim = $request->nim;
            $data->nama = $request->nama;
            $data->no_hp = $request->no_hp;
            $data->anak_ke = $request->anak_ke;
            $data->pekerjaan_ortu = $request->pekerjaan_ortu;
            $data->penghasilan_ortu = $request->penghasilan_ortu;
            $data->kelas_id = $request->kelas_id;
            $data->semester_id = $request->semester_id;
            $data->angkatan = $request->angkatan;
            $data->alamat = $request->alamat;
            $data->alamat_domisili = $request->alamat_domisili;
            $data->email = $request->email;
            $data->password = $request->password;
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
                unlink('.' . Storage::url($data->student_image->image));
            }
            $data->delete();
            action_message('delete', $this->menu);
        } catch (\Exception $e) {
            abort(500);
        }
        return redirect()->route($this->route . '.index');
    }
}