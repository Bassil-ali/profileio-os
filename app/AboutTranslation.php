<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['text','section_1','section_2','section_3','section_4','section_5','section_6'];
}
