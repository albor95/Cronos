<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sequencia extends Model
{
     public $timestamps = false;
     protected $table='sequencia';
     protected $primaryKey='SeqCod';
}
