<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Mail;

class EmailController extends Controller
{
    public function send(Request $request,$id)
    {
    	$user = User::find($id);

        Mail::send('emails.test', ['user' => $user], function ($email) use ($user) {
        	$email->from('330395508@qq.com', '欢迎注册');
            $email->to('330395508@qq.com')->subject('欢迎注册-来自本地测试邮件');
        });

        echo "Send success !";
    }
}
