<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attached extends Model
{
    protected $table='attached';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name',
        'att_cate_id'       
    ];
    public function categories(){
        return $this->belongsTo('App\Models\categories','id','att_cate_id');
    }
    public function products(){
        return $this->hasMany('App\Models\products','att_cate_id','id');
    }
}
