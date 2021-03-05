<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['address1','address2','address3','address4','address5','address6','text1','text2','text3','text4','text5','text6',];
}
