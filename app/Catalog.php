<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = "categories";
    public function product(){
        return $this->hasMany('App\Product','att_cate_id','id');
    }
}
