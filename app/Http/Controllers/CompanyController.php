<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Company;
use App\Models\User;
use Kodeine\Acl\Models\Eloquent\Permission;
use Kodeine\Acl\Models\Eloquent\Role;
use Intervention\Image\ImageManagerStatic as Image;
use Request;
use Cache;

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
        $com_key = 'Company_detail_' . $id;

        if ( Cache::has($com_key) ) {
            $com_info = Cache::get($com_key);
        }else{
            $com_info = Company::find($id);
            Cache::forever($com_key,$com_info);
        }
        
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

    public function img_test()
    {
        $img = Image::make('public/1470295965-xixi.jpeg')->resize(300, 200);
        return $img->response('jpg');
    }
}
