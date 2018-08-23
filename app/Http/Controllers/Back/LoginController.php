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
    protected $username;

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
        $this->username = config('admin.global.username');
    }

    /**
     * 后台登录页面
     */
    public function showLoginForm()
    {
        return view('back.login.index');
    }

    protected function guard()
    {
        return auth()->guard('admin');
    }
}
