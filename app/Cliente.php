<?php

namespace App;
// Object Relacional Mapping
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable  = ['nome','endereco','email','celular'];
    protected $connection = 'mysql2';
}
