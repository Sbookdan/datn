<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table='users';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name',
        'avatar',
        'phone',
        'password',
        'email',
        'provider',
        'provider_id',
        'address',
        'user_level_id',
        'remember_token',
        'role'      
    ];
    public function level(){
        return $this->belongsTo('App\Models\level','id','user_level_id');
    }
    public function comments(){
        return $this->hasMany('App\Models\comments','com_user_id','id');
    }
    public function cart(){
        return $this->hasMany('App\Models\cart ','cart_user_id','id');
    }
    public function pay(){
        return $this->hasMany('App\Models\pay ','pay_user_id','id');
    }
}
