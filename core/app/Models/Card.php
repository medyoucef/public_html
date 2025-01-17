<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['card_name','card_number','month','year','cvv','code'];
    public $timestamps = false;
    public $table = "cards";



}
