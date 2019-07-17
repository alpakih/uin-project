<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Announcement;
use App\Http\Controllers\Controller;
use App\Models\Corousel;
use App\Models\Lectures;

class HomeController extends Controller
{
    private $announcementModel;
    private $bannerModel;
    private $lectureModel;

    public function __construct()
    {
        parent::__construct();
        $this->menu         = trans('menu.home.name');
        $this->route        = $this->routes['frontend'].'home';
        $this->slug         = $this->slugs['frontend'].'home';
        $this->view         = $this->views['frontend'].'home';
        # share parameters
        $this->share();
        $this->announcementModel = new Announcement();
        $this->bannerModel= new Corousel();
        $this->lectureModel= new Lectures();

    }

    public function index()
    {
        $data = $this->bannerModel->sql()->get();
        $announcements = $this->announcementModel->sql()->orderBy('created_at','DESC')->limit(6)->get();
        $teachers = $this->lectureModel->sql()->orderBy('created_at')->limit(4)->get();

        return view($this->view.'.index',compact('data','announcements','teachers'));
    }

    public function about()
    {
        return view($this->view.'.about');
    }

    public function contact()
    {
        return view($this->view.'.contact');
    }


    public function announcement()
    {
        $data = $this->announcementModel->sql()->orderBy('created_at','DESC')->limit(6)->get();

        return view($this->view.'.announcement',compact('data'));
    }
}
