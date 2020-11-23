<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $table='level';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name'      
    ];
    public function users (){
        return $this->hasMany('App\Models\users ','	user_level_id','id');
    }
}
