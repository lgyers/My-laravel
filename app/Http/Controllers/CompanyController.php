<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
    	$company = Company::find(1);
    	// return $company;
    	return view('company');
    }
}
