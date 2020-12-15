<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table='cart';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'cart_product_id',
        'cart_user_id',
        'number',     
    ];
    public function products(){
        return $this->belongsTo('App\Models\products','id','cart_product_id');
    }
    public function users(){
        return $this->belongsTo('App\Models\users','id','cart_user_id');
    }
    public function shipping_fee(){
        return $this->belongsTo('App\Models\shipping_fee','id','cart_shipping_fee_id');
    }
    public function pay(){
        return $this->hasMany('App\Models\pay ','pay_cart_id','id');
    }
}
