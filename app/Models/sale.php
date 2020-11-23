<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $table='sale';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name'      
    ];
    public function products(){
        return $this->hasMany('App\Models\products','att_sale_id','id');
    }
}
