<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    protected $table='publisher';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name'      
    ];
    public function products(){
        return $this->hasMany('App\Models\products','att_pub_id','id');
    }
}
