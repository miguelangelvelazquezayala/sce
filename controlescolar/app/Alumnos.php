<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table='alumnos';
    protected $fillable = [ 'cveesp','email'];
    protected $guarded = ['nua'];
    public $timestamps  = false;
}
