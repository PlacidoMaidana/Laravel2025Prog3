<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Libros_webController extends Controller
{
     public function index()
    {
        // $libros = Libro::all();
        $nombre='libros';
        $libros = DB::table('libros')->get();
        //DD($libros);
        //return response()->json($libros);
        return view('vista_nueva',compact('libros','nombre'));
    }


    public function show($id)
    {
        // $libro = Libro::find($id);
        $edit='si';
        $libro = DB::table('libros')->where('id', $id)->first();
        if (!$libro) {
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }
        //dd($libro);
        return view('ver_libro',compact('libro','edit'));
    }




}
