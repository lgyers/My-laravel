<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('super-admin')) {
            echo "hao";
        }
        exit;
        return view('welcome');
        // $owner = new Role();
        // $owner->name         = 'tourist';
        // $owner->display_name = '游客'; // optional
        // $owner->description  = '游客'; // optional
        // $owner->save();

        // $admin = new Role();
        // $admin->name         = 'super-admin';
        // $admin->display_name = '超级管理员'; // optional
        // $admin->description  = '超级管理员'; // optional
        // $admin->save();

        // $user = User::where('name', '=', 'lgyer')->first();
        // $user->roles()->attach($admin->id);

        // $createPost = new Permission();
        // $createPost->name         = 'create-post';
        // $createPost->display_name = '创建'; // optional
        // // Allow a user to...
        // $createPost->description  = '创建'; // optional
        // $createPost->save();

        // $editUser = new Permission();
        // $editUser->name         = 'edit-user';
        // $editUser->display_name = '编辑'; // optional
        // // Allow a user to...
        // $editUser->description  = '编辑'; // optional
        // $editUser->save();

        // $admin->attachPermission($createPost);
        // // equivalent to $admin->perms()->sync(array($createPost->id));

        // $owner->attachPermissions(array($createPost, $editUser));
        // // equivalent to $owner->perms()->sync(array($createPost->id, $editUser->id));
    }
}
