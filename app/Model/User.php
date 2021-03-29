<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','user_name','company_name','email','phone_number','password'];
}
