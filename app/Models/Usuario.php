<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento',
        'email',
        'telefone',
        'endereco',
        'cidade',
        'estado',
        'cep'
    ];
    protected $dates = [
        'data'
    ];


}
