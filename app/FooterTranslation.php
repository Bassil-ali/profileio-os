<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['company_name','text','address'];
}
