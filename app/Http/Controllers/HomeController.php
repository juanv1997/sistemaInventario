<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class HomeController extends Controller
{
    public function __invoke()
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }
}
