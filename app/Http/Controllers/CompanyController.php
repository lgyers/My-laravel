<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Company;
use App\Models\User;
use Kodeine\Acl\Models\Eloquent\Permission;
use Kodeine\Acl\Models\Eloquent\Role;
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
        // echo Role::with('permissions')->get();
        $roleAdmin = new Role();
        $roleAdmin->name = 'Administrator';
        $roleAdmin->slug = 'administrator';
        $roleAdmin->description = 'manage administration privileges';
        $roleAdmin->save();
    }

    public function admin_test()
    {
        echo "admin-test success!";
    }

    public function add_role()
    {
        // $roleAdmin = Role::find(1);
        // $user = User::find(1);
        // // by object
        // $user->assignRole($roleAdmin);
        // // or by id
        // $user->assignRole($roleAdmin->id);
        // // or by just a slug
        // $user->assignRole('administrator');

        // $user = User::first();
        // return $user->getRoles();

        //permission
        // $permission = new Permission();
        // $permUser = $permission->create([ 
        //     'name'        => 'user',
        //     'slug'        => [          // pass an array of permissions.
        //         'create'     => true,
        //         'view'       => true,
        //         'update'     => true,
        //         'delete'     => true,
        //         'view.phone' => true
        //     ],
        //     'description' => 'manage user permissions'
        // ]);

        // $permission = new Permission();
        // $permPost = $permission->create([ 
        //     'name'        => 'post',
        //     'slug'        => [          // pass an array of permissions.
        //         'create'     => true,
        //         'view'       => true,
        //         'update'     => true,
        //         'delete'     => true,
        //     ],
        //     'description' => 'manage post permissions'
        // ]);


        // $roleAdmin = Role::first(); // administrator
        // // permission as an object
        // $roleAdmin->assignPermission($permUser);
        // // as an id
        // $roleAdmin->assignPermission($permUser->id);
        // // or by name
        // $roleAdmin->assignPermission('user');
        // // or by collection
        // $roleAdmin->assignPermission(Permission::all());
        // echo "success";

        $user = User::first();
        dump($user->getPermissions());

        $user = User::first();
        // $user->is('administrator');
        $a = $user->isAdministrator();
        // dump($a);exit();
    }
}
