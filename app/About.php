<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    use \Dimsav\Translatable\Translatable;

    
    protected $guarded = [];
    public $translatedAttributes = ['text','section_1','section_2','section_3','section_4','section_5','section_6'];
}
