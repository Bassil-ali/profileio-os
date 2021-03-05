<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{

    use \Dimsav\Translatable\Translatable;


    protected $guarded = [];
    public $translatedAttributes = ['address','text'];


    public function getImagePathAttribute()
    {
        return asset('uploads/product_images/' . $this->image);

    }//end of image path attribute
}
