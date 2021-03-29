<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = [
        'user_name',
        'name',
        'company_name',
        'email',
        'phone_number'
    ];
}
