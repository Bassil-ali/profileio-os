<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurworkTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['address','text'];
}
