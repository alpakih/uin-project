<?php


namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->menu = trans('menu.user.name');
        $this->route = $this->routes['frontend'] . 'user';
        $this->slug = $this->slugs['frontend'] . 'user';
        $this->view = $this->views['frontend'] . 'user';
        # share parameters
        $this->share();
    }

    public function index()
    {
        return view($this->view . '.login');
    }

    public function register()
    {
        return view($this->view . '.register');
    }
}