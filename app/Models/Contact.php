<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
       'name',
       'email',
       'phone',
       'company',
       'address',
       'message',
        'status',
    ];
}
