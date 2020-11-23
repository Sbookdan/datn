<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table='categories';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name'      
    ];
    public function attached (){
        return $this->hasMany('App\Models\attached ','att_cate_id','id');
    }
}
