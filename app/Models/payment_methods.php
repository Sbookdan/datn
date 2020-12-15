<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_methods extends Model
{
    protected $table='payment_methods';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name',
        'avatar'     
    ];
    public function pay(){
        return $this->hasMany('App\Models\pay ','pay_payment_methods_id','id');
    }
}
