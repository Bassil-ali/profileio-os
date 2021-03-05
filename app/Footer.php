<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{

    use \Dimsav\Translatable\Translatable;


    protected $guarded = [];
    public $translatedAttributes = ['company_name','text','address'];
}
