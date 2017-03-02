<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);
        // return $users;
        $side_bar = 'users/list';
        return view('admin.users.list',compact('users', 'side_bar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userInfo = User::find($id);
        $side_bar = 'users/list';
        return view('admin.users.edit', compact('userInfo', 'side_bar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd(Input::all());
        $user = new User;
        $user->email = Input::get('email');
        $user->name = Input::get('name');
        // $user->des = Input::get('des');

        if (Input::hasFile('thumbnail')) {
            $file = Input::file('thumbnail');
            $name = time().'-'.$file->getClientOriginalName();
            $file = $file->move(public_path().'/images/', $name);
            $user->logo = $name;
        }
        
        if ($user->save()) {
            return $this->successRoutTo("admin.users.index", "保存成功");
        }
        else{
            return $this->errorBackTo(['error' => $e->getMessage()]);
        }
        // try{
        //     if ($user->save()) {
        //         return $this->successRoutTo("admin.users.index", "保存成功");
        //     }
        // }
        // catch (\Exception $e){
        //     return $this->errorBackTo(['error' => $e->getMessage()]);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            if (User::destroy($id)) {
                return response([
                    'status'  => 200,
                    'message' => '删除成功',
                ]);
            }
        }
        catch (\Exception $e){
            return $this->errorBackTo(['error' => $e->getMessage()]);
        }
    }
}
