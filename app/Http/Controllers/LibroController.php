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
        $libro = DB::table('libros')->where('ISBN', $id)->first();
        if (!$libro) {
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }
        return response()->json($libro);
    }


     public function actualizarCantidad(Request $request)
         {
         $validator = Validator::make($request->all(), [
         'ISBN' => 'required',
         'CantidadDisponible' => 'required|integer|min:0',
         ]);
        
         if ($validator->fails()) {
         return response()->json(['errors' => $validator->errors()], 400);
         }
        
         $isbn = $request->input('ISBN');
         $libro = DB::table('libros')->where('ISBN', $isbn)->first(); 
        
         if (!$libro) {
         return response()->json(['message' => 'Libro no encontrado'], 404);
         }
        
         DB::table('libros')
         ->where('ISBN', $isbn)
         ->update(['CantidadDisponible' => $request->input('CantidadDisponible')]);
       
         $libroActualizado = DB::table('libros')->where('ISBN', $isbn)->first(); // Obtener el libro actualizado
       
        return response()->json($libroActualizado, 200);
        
       
         }

         public function eliminarLibro(Request $request, $isbn)
         {
         $libro = DB::table('libros')->where('ISBN', $isbn)->first();
        
         if (!$libro) {
         return response()->json(['message' => 'Libro no encontrado'], 404);
         }
        
         DB::table('libros')->where('ISBN', $isbn)->delete();
        
         return response()->json(['message' => 'Libro eliminado'], 200);
         }

         public function crearLibro(Request $request)
         {
         $values = [
         'ISBN' => $request->input('ISBN'),
         'Titulo' => $request->input('Titulo'),
         'Autor' => $request->input('Autor'),
         'Editorial' => $request->input('Editorial'),
         'AnioPublicacion' => $request->input('AnioPublicacion'),
         'CantidadTotal' => $request->input('CantidadTotal'),
         'CantidadDisponible' => $request->input('CantidadDisponible'),
         ];
        
         DB::table('libros')->insert($values);
        
         return response()->json(['message' => 'Libro creado'], 201);
         }
         
}
