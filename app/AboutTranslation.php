<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['text','address_1','address_2','address_3','address_4','address_5','address_6','section_1','section_2','section_3','section_4','section_5','section_6'];
}
