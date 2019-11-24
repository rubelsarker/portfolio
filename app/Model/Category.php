<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function projects(){
        return $this->hasMany('App\Model\Project','category_id');
    }

}
