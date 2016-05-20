<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
    	$company = Company::take(10)->get();
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
}
