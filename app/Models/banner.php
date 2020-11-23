<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table='banner';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'name',
        'avatar'       
    ];

}
