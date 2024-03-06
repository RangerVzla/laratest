<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    //

   public function index ($variable2,$variable3=null) {
        $comotuquieras=[$variable2,$variable3];
        dd($comotuquieras);
        return view('holamundo', compact('comotuquieras'));
    }
    public function prueba1 (string $variable) {
        return 'User '.$variable;
    }

}