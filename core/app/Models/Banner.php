<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['title', 'logo', 'photo','link','details','home_page'];
    public $timestamps = false;
}
