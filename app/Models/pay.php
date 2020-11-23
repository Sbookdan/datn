<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pay extends Model
{
    protected $table='pay';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'pay_user_id',
        'pay_cart_id',
        'pay_payment_methods_id',
        'token',       
    ];
    public function users(){
        return $this->belongsTo('App\Models\users','id','pay_user_id');
    }
    public function cart(){
        return $this->belongsTo('App\Models\cart','id','pay_cart_id');
    }
    public function payment_methods(){
        return $this->belongsTo('App\Models\payment_methods','id','pay_payment_methods_id');
    }
}
