<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table='rol';
    protected $fillable = ['rol'];
    protected $guarded = ['id_rol'];
    public $timestamps  = false;
}
