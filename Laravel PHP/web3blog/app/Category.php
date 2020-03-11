<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    //use the cateogies table when working with this model

    public function posts(){
    	return $this->hasMany('App\Post');
    	//connected to the Post model
    }
}
