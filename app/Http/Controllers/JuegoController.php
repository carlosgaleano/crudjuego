<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\JuegossFormRequest;
use App\Juegos;
use DB;

class JuegoController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index(Request $request){

        $query = trim($request->input('searchText'));

        $juegos=DB::table('juegos')->get();

       // dd($juegos);
        return view('juegos.index', [
            'juegos'=>$juegos,
            'searchText'=>$query
        ]);

    }

    
    public function update(Request $request, $id)
    {

        
        $juego = Juegos::findOrFail($id);
      
        $juego->name = $request->get('name');
      


        $juego->update();
        return redirect('Juegos');

    }

    public function edit($id)
    {
        $juego = Juegos::findOrFail($id);
        //$categorias para el select form
      

        return view('juegos.edit',[
            'juego' => $juego,
            
            ]);
    }

    public function destroy($id)
    {
        $juego = Juegos::findOrFail($id);
        $juego->delete();
        return redirect('Juegos');
    }

}
