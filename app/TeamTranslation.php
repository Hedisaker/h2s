<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'job'];
}
