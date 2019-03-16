<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['nome','cpf'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'funcionarios';
}
