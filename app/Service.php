<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use \Dimsav\Translatable\Translatable;

    protected $guarded = ['id'];

    public $translatedAttributes = ['name', 'description'];
}
