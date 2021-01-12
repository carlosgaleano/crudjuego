<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticuloFormRequest;
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

}
