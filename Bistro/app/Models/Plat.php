<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $table='plats';
    protected $primarykey='id';
    protected $fillable= ['image','name','Description','price'];
    // use HasFactory;
}
