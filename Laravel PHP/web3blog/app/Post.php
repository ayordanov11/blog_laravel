<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public function category(){
   	return $this->belongsTo('App\Category');
      //post belongs to category, category has many posts
   }

   public function tags(){
   	return $this->belongsToMany('App\Tag');
      //tags associate with posts
      //reference our tags
   }

   public function comments()
   {
   	return $this->hasMany('App\Comment');
   }
   public function user()
   {
      return $this->belongsTo('App\User');
   }
}
