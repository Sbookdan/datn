<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table='comments';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'com_user_id',
        'com_product_id',
        'content_comment',       
    ];
    public function users(){
        return $this->belongsTo('App\Models\users','id','com_user_id');
    }
    public function products(){
        return $this->belongsTo('App\Models\products','id','com_product_id');
    }
}
