<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
	use SoftDeletes;

    protected $table = 'admins';

    protected $fillable = ['fullname','phone','email','password','type','actived'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public $timestamps = true; 
}
