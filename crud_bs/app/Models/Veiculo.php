<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    // Adicionar os campos que são permitidos para mass-assignment
    protected $fillable = [
        'nome',
        'marca',
        'modelo',
        'ano',
    ];
}


