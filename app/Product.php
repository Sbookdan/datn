<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public function catalog(){
         return $this->belongsTo('App\Catalog','att_cate_id','id');
    }
   
}
