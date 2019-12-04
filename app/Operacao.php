<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operacao extends Model
{
     public $timestamps = false;
     protected $table='operacao';
     protected $primaryKey='OpeCod';
}
