<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Admincontroller extends Controller
{
    /**
     * 后台首页
     */
    public function index()
    {
        return view('admin.index');
    }

    public function Alogin()
    {
    	return view('admin.login');
    }

    public function aDoLogin(Request $request)
    {	

    	$username = $request->input('username');
    	$password = $request->input('password');

    	$info = User::where('username',$username)->first();
    	if (empty($info)) {
    		return back()->with('error','用户名不存在');
    	}

    	if (Hash::check($password,$info['password'])) {

    		session(['uid'=>$info['id']]);
    		return redirect('/admin');
    	}

    	return back()->with('error','密码错误');
    }
}
