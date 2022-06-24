<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class PartidaController extends Controller
{
    public function index(){
        $nivels=Nivel::all();
        return view('sala',compact('nivels'));
    }
}
