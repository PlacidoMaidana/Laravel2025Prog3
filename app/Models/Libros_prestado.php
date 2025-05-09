<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibroPrestado extends Model
{
    use HasFactory;

    protected $table = 'libros_prestados';

    protected $fillable = [
        'prestamo_id',
        'libros_id',
    ];

    public function prestamo()
    {
        return $this->belongsTo(Prestamo::class);
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libros_id');
    }
}