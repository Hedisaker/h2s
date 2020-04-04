<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use \Dimsav\Translatable\Translatable;

    protected $guarded = ['id'];
    
    public $translatedAttributes = ['address'];
}
