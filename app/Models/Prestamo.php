<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table = 'prestamos';

    protected $fillable = [
        'fecha_prestamo',
        'fecha_devolucion',
        'lector_id',
    ];

    public function lector()
    {
        return $this->belongsTo(Lector::class);
    }

    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}