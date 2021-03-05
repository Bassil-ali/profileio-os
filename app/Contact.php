<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    use \Dimsav\Translatable\Translatable;


    protected $guarded = [];
    public $translatedAttributes = ['address'];
}
