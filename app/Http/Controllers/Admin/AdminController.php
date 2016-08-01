<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Company;

class AdminController extends Controller
{
    public function index()
    {
    	$side_bar = 'company/index';
        return view('admin.index.index',compact('side_bar'));
    }

    public function article()
    {
    	$company = Company::where('com_show','0')->orderBy('com_id','desc')->paginate(15);
    	$side_bar = 'company/article';
        return view('admin.index.index',compact('company','side_bar'));
    }
}
