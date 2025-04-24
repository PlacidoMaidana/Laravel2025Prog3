<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Libro extends Model
{
    
    protected $table = 'libros'; // Si el nombre de la tabla no es el plural del modelo
    protected $primaryKey = 'ISBN'; // Si la clave primaria no es 'id'
    public $incrementing = true; // Si la clave primaria es autoincremental (false si no lo es)
    public $timestamps = true; // Si la tabla tiene las columnas created_at y updated_at

    protected $fillable = [
        'Titulo',
        'Autor',
        'Editorial',
        'AnioPublicacion',
        'CantidadTotal',
        'CantidadDisponible',
    ];
}