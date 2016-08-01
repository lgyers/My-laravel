<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	//成功跳转路由
	public function successRoutTo($route, $message)
	{
		return redirect()->route($route)->withSuccess($message);
	}

	//成功返回页面
	public function successBackTo($message)
	{
		return redirect()->back()->withSuccess($message);
	}

	//失败跳转路由
	public function errorRouteTo($route, $message)
	{
		return redirect()->route($route)->withErrors($message);
	}
	
	//失败返回页面
	public function errorBackTo($message)
	{
		return redirect()->back()->withErrors($message)->withInput();
	}
}
