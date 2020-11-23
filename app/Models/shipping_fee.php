<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipping_fee extends Model
{
    
    protected $table='shipping_fee';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name',
        'price_ship'      
    ];
    public function cart(){
        return $this->hasMany('App\Models\cart ','cart_shipping_fee_id','id');
    }
}
