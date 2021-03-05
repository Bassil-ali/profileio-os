<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    use \Dimsav\Translatable\Translatable;

    
    protected $guarded = [];
    public $translatedAttributes = ['address1','address2','address3','address4','address5','address6','text1','text2','text3','text4','text5','text6',];
}
