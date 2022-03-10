<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Donors extends Model
{
    protected $fillable = [
        'title',
        'image',
        'status',
    ];
}
