<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * 角色控制器
     */
    
    /**
     * 用户登录
     * @return [type] [description]
     */
    public function login()
    {
    	return view('user.login');
    }

    /**
     * 处理用户登录
     * @return [type] [description]
     */
    public function doLogin()
    {
    	return redirect('/');
    }
}
