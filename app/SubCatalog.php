<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCatalog extends Model
{
    protected $table = "attached";
    public function product(){
        return $this->hasMany('App\Product','att_cate_id','id');
    }
}