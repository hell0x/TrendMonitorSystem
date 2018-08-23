<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**
     * 后台首页
     */
    public function index()
    {
        dd('后台首页，当前用户名：'.auth('admin')->user()->name);
    }
}
