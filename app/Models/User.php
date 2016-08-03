<?php

namespace App\Models;

use Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Eloquent implements 	AuthenticatableContract,
										AuthorizableContract,
                                    	CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, EntrustUserTrait {
    	Authorizable::can insteadof  EntrustUserTrait;
        EntrustUserTrait::can as hasPermission;
    }

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];


}
