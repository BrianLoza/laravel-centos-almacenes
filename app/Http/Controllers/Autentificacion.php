<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Autentificacion extends Controller
{
    public function index() {
        return view('Auth.index');
    }

    public function auth(Request $request) {

        $usuarioSql = DB::selectOne('SELECT usuario, contrasenia FROM usuario WHERE usuario = :usuario', array($request['usuario']));

        if ($usuarioSql === null) {
            $mensaje = "Usuario Invalido";
            return view('auth.index', compact('mensaje'));
        } else {
            if ($request['contrasenia'] === $usuarioSql->contrasenia) {
                return redirect('/GrupoAlmasen');
            } else {
                $mensaje = "Usuario Invalido";
                return view('auth.index', compact('mensaje'));
            }

        }

    }

}
