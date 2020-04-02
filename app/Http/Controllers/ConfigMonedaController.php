<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ConfigMonedaController extends Controller
{
    //
    public function index()
    {
        // $users = DB::select('select * from users where active = ?', [1]);
        $ConfigMoneda = DB::select('select * from GNL_config_moneda');

        return view('/ConfigMoneda', ['ConfigMoneda' => $ConfigMoneda]);
    }
}

				
// @foreach($Grupo_Almacen as $Grupo_Almacen)
// <tr>
//   <td>{{ $Grupo_Almacen->cod_grupo_almacen }}</td>
//   <td>{{ $Grupo_Almacen->cuenta_trans_articulo }}</td>
//   <td>{{ $Grupo_Almacen->cuenta_grupo_articulo }}</td>
//   <td>{{ $Grupo_Almacen->cuenta_consumo_int }}</td>
//   <td>{{ $Grupo_Almacen->cuenta_diferencia_articulo }}</td>
//   <td><span class="tag tag-success">{{ $Grupo_Almacen->cod_sucursal }}</span></td>
//   <td>{{ $Grupo_Almacen->desc_grupo_almacen }}</td>
//                     </tr>
//                 @endforeach