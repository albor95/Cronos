<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';
    protected $primaryKey='UsuCod';
    protected $nome='UsuNom';
    protected $tipo='UsuTip';
   
}
