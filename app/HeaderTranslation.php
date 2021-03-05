<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['address','text'];
}
