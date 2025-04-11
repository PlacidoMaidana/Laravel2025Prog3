<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tablasController extends Controller
{
    //

    public function index($edad) {

        if ($edad>=18) {
            return view('mayoria_de_edad.bienVenido',['edad'=>$edad]);
        } else {
            return view('mayoria_de_edad.esMenor',['edad'=>$edad]);
        }
        

    }

}
