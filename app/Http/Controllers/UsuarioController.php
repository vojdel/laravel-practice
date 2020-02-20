<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuarioUnParametro($nombre='invitado'){
        return 'Usuario: ' . $nombre;
    }

    public function usuariDosParametros($nombre, $comentarioid){
        return 'Usuario: ' . $nombre . ' y el Comentario es ' . $comentarioid;
    }
}
