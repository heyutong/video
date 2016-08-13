<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use DB,Sessiong,Request,Redirect;

class AdminController extends Controller{
	/**
	 * 首页
	 */
	public function index()
	{
		return view('admin/index');
	}

	/**
	 * 头部
	 */
	public function header()
	{
		return view('admin/header');
	}

	/**
	 * 展示页
	 */
	public function show()
	{
		return view('admin/show');
	}
}