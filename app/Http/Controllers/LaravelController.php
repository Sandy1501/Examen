<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function Laravel(){
        $vistas =view('laravel');
        return $vistas;
    }
}
