<?php
use App\Models\Libro; 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $libros = Libro::all();
        $libros = DB::table('libros')->get();
        return response()->json($libros);
    }


    public function show($id)
    {
        // $libro = Libro::find($id);
        $libro = DB::table('libros')->where('id', $id)->first();
        if (!$libro) {
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }
        return response()->json($libro);
    }


     public function actualizarCantidad(Request $request)
         {
         $validator = Validator::make($request->all(), [
         'id' => 'required',
         'CantidadDisponible' => 'required|integer|min:0',
         ]);
        
         if ($validator->fails()) {
         return response()->json(['errors' => $validator->errors()], 400);
         }
        
         $isbn = $request->input('id');
         $libro = DB::table('libros')->where('id', $isbn)->first(); 
        
         if (!$libro) {
         return response()->json(['message' => 'Libro no encontrado'], 404);
         }
        
         DB::table('libros')
         ->where('id', $isbn)
         ->update(['CantidadDisponible' => $request->input('CantidadDisponible')]);
       
         $libroActualizado = DB::table('libros')->where('id', $isbn)->first(); // Obtener el libro actualizado
       
        return response()->json($libroActualizado, 200);
        
       
         }

         public function eliminarLibro(Request $request, $isbn)
         {
         $libro = DB::table('libros')->where('id', $isbn)->first();
        
         if (!$libro) {
         return response()->json(['message' => 'Libro no encontrado'], 404);
         }
        
         DB::table('libros')->where('id', $isbn)->delete();
        
         return response()->json(['message' => 'Libro eliminado'], 200);
         }

         public function crearLibro(Request $request)
         {
         $values = [
          //'id' => $request->input('id'),
         'titulo' => $request->input('titulo'),
         'autor' => $request->input('autor'),
         'editorial' => $request->input('editorial'),
         'anioPublicacion' => $request->input('anioPublicacion'),
         'cantidadTotal' => $request->input('cantidadTotal'),
         'cantidadDisponible' => $request->input('cantidadDisponible'),
         ];
        
         DB::table('libros')->insert($values);
        
         return response()->json(['message' => 'Libro creado'], 201);
         }
         
}
