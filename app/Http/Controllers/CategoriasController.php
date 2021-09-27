<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function bladevistas(){
        $vistas =view('categorias/bladevistas');
        return $vistas;
    }
    public function control(){
        $vistas =view('categorias/control');
        return $vistas;
    }
    public function instalacion(){
        $vistas =view('categorias/instalacion');
        return $vistas;
    } 
    public function rutas(){
        $vistas =view('categorias/rutas');
        return $vistas;
    } 
    public function vistas(){
        $vistas =view('categorias/vistas');
        return $vistas;
    } 
    public function tema(){
        $vistas =view('categorias/tema');
        return $vistas;
    }
}
