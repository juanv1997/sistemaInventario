<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){

        return "Principal";

    }

    public function show($mensaje){

        return "MOstrar $mensaje";


    }

    public function create(){

        return "Crear";


    }
}
