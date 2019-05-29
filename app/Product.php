<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','content','category_id','featured','slug',
    'model','brand'];

    public function getFeaturedAttribute($featured){
      return asset($featured);
    }

    protected $dates = ['delete_at'];

    public function category(){
      return $this->belongsTo('App\Category');
    }
}
