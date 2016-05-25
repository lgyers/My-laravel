<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;

use App\Company;
use App\Role;
use Request;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::where('com_show','0')->orderBy('com_id','desc')->paginate(15);
        // return $company;
        return view('Company.list',compact('company'));
    }

    public function show($id)
    {
        $com_info = Company::find($id);
        // return $company;
        return view('Company.detail',compact('com_info'));
    }

    public function add()
    {
        return view('Company.create');
    }

    public function create()
    {
        $com_info = Request::all();
        return $com_info;
    }

    public function role()
    {
        echo Role::with('permissions')->get();
    }
}
