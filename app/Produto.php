<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable  = ['codigo','descricao','quantidade'];
    protected $connection = 'mysql2';
}
