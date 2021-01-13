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

    public function create(){


       return  view('juegos.create');
    }

    public function vista(){

        $juegos=DB::table('juegos')->get();
        return  view('juegos.lista', [
            'juegos'=>$juegos,

        ]);
     }

    public function store(Request $request){

        $cke=$request->get('estatus')==null ? 0 : 1;

        $juego = new Juegos;
        $juego->id_juego= $request->get('id_juego');
        $juego->name = $request->get('name');
        $juego->url = $request->get('url');
        $juego->descripcion = $request->get('descripcion');
        $juego->url_imagen = $request->get('url_imagen');
        $juego->estatus = $cke;

        $juego->save();
        return redirect('Juegos');

    }

    public function update(Request $request, $id)
    {

      //  dd($request);
      $cke=$request->get('estatus')==null ? 0 : 1;

        $juego = Juegos::findOrFail($id);

        $juego->name = $request->get('name');
        $juego->url = $request->get('url');
        $juego->descripcion = $request->get('descripcion');
        $juego->url_imagen = $request->get('url_imagen');
        $juego->estatus = $cke;




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
