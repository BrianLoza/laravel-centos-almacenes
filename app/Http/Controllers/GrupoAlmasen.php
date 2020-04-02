<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GrupoAlmasen extends Controller
{
    //
    public function index()
    {
        // $users = DB::select('select * from users where active = ?', [1]);
        $Grupo_Almacen = DB::select('select * from IVE_Grupo_Almacen');

        return view('GrupoAlmasen', ['Grupo_Almacen' => $Grupo_Almacen]);
    }

    public function IngresarGrupoAlamasen(Request $request)
    {

        // dd($request['cod_grupo_almacen']);

        $cod_grupo_almacen=$request['cod_grupo_almacen'];
        $desc_grupo_almacen=$request['desc_grupo_almacen'];
        $cuenta_trans_articulo=$request['cuenta_trans_articulo'];
        $cuenta_grupo_articulo=$request['cuenta_grupo_articulo'];
        $cuenta_consumo_int=$request['cuenta_consumo_int'];
        $cuenta_diferencia_articulo=$request['cuenta_diferencia_articulo'];
        $cod_sucursal=$request['cod_sucursal'];
        $enviado='a';

        $Grupo_Almacen = DB::select('INSERT INTO IVE_Grupo_Almacen
        (cod_grupo_almacen,desc_grupo_almacen,cuenta_trans_articulo,cuenta_grupo_articulo,cuenta_consumo_int,cuenta_diferencia_articulo,cod_sucursal,enviado)
        VALUES
        (?,?,?,?,?,?,?,?)',array($cod_grupo_almacen,$desc_grupo_almacen,$cuenta_trans_articulo,$cuenta_grupo_articulo,$cuenta_consumo_int,$cuenta_diferencia_articulo,$cod_sucursal,$enviado));

        return redirect('/GrupoAlmasen');
    }
}
