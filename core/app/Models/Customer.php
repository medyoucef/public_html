<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    public $table = "customers";

// protected $casts = [
    //     'cart' => 'array',
    //  ];

}
