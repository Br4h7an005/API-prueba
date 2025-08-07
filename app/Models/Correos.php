<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correos extends Model
{
    /** @use HasFactory<\Database\Factories\CorreosFactory> */
    use HasFactory;

    // Definir la tabla y los campos que se pueden llenar
    protected $table = 'correos';
    protected $fillable = [
        'correo',
        'clave'
    ];
}
