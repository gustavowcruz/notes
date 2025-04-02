<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($valor=null)
    {
        return view('main', ['value' => $valor]); //o data passa os valores que vão se associar/tornar uma variável
    }

    public function page2 ($valor=null){
        return view('page2', ['value'=> $valor]);
    }
}
