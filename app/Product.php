<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'image_url_1', 'image_url_2', 'category_id', 'size_1', 'size_2', 'size_3','size_4',
    'price', 'brand', 'featured', 'colour', 'fit_1', 'fit_2'];


  public function category(){
      $this->belongsTo('App\Category');
  }
}
