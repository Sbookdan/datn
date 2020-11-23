<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table='products';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name',
        'pro_att_id',
        'price',
        'author',
        'pro_pub_id',
        'pro_sale_id',
        'total_sale',
        'avatar',
        'description',       
    ];
    public function attached(){
        return $this->belongsTo('App\Models\attached','id','att_cate_id');
    }
    public function publisher(){
        return $this->belongsTo('App\Models\publisher','id','pro_pub_id');
    }
    public function sale(){
        return $this->belongsTo('App\Models\sale','id','pro_sale_id');
    }
    public function comments(){
        return $this->hasMany('App\Models\comments','com_product_id','id');
    }
    public function cart(){
        return $this->hasMany('App\Models\cart ','cart_product_id','id');
    }
}
