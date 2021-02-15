<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'nome',
        'telefone1',
        'telefone2',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'niver'
    ];
}
