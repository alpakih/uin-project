<?php


namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Semester;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    private $semesterModel;
    private  $kelasModel;

    public function __construct()
    {
        parent::__construct();
        $this->menu = 'Mahasiswa';
        $this->route = $this->routes['frontend'] . 'student';
        $this->slug = $this->slugs['frontend'] . 'student';
        $this->view = $this->views['frontend'] . 'student';
        # share parameters
        $this->share();

        $this->semesterModel = new Semester();
        $this->kelasModel= new Kelas();
    }

    public function index()
    {
        if (!Session::get('login')) {
            return redirect('/student/login')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('frontend.student.home');
        }

    }

    public function login()
    {
        return view('frontend.auth.login');
    }

    public function register()
    {

        $class = $this->kelasModel->orderBy('name')->get();
        $semesters = $this->semesterModel->orderBy('name')->get();

        return view('frontend.auth.register',compact('class','semesters'));
    }

    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = new Students();
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('/student/login')->with('alert-success', 'Register Berhasil');
    }

    public function loginPost(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $data = Students::where('email', $email)->first();
        if ($data) {
            if (Hash::check($password, $data->password)) {
                Session::put('nama', $data->nama);
                Session::put('email', $data->email);
                Session::put('login', TRUE);
                return redirect('/student/home');
            } else {
                return redirect('/student/login')->with('alert', 'Password atau Email, Salah !');
            }
        } else {
            return redirect('/student/login')->with('alert', 'Password atau Email, Salah!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/student/login')->with('alert', 'Kamu sudah logout');
    }

    public function profile()
    {
        if (!Session::get('login')) {
            return redirect('/student/login')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('frontend.student.profile');
        }

    }

}