<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Lector extends Model
{
    use HasFactory;

    protected $table = 'lectores';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'direccion',
        'telefono',
    ];

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}