<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use \Dimsav\Translatable\Translatable;

    protected $guarded = ['id'];

    public $translatedAttributes = ['name', 'job'];
    protected $appends = ['image_path'];


    public function getImagePathAttribute()
    {
        return asset('uploads/team_images/' . $this->image);

    }//end of image path attribute
}
