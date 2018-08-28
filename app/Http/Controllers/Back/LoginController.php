<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * @var string
     */
    protected $redirectTo = '/admin/index';

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    /**
     * 后台登录页面
     */
    public function showLoginForm()
    {
        return view('back.login.index');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/admin/login');
    }

    protected function guard()
    {
        return auth()->guard('admin');
    }
}
