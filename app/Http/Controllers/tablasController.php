<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tablasController extends Controller
{
    //

    public function index($nombre) {

        $nombre="Maria";


        return view('vista2',['nombre'=>$nombre]);
    }

}
