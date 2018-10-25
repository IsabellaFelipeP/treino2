<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
  public function index(){
      return view ('usuarios', [
            'texto' => 'Lista de usuarios',
            'checagem' => true,
            'usuarios' => ['usuarios1', 'usuarios2', 'usuarios3', 'usuarios4']
      ]);
  }
}
