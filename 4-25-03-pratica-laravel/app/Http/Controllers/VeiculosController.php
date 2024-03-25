<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    public function showAll(){
        $lista = Veiculo::all();
        return view('veiculos.list', ['lista' => $lista]);
    }

    public function compose(){
        return view('veiculos.compose');
    }
    public function store(Request $request){
        Veiculo::create([
            'fabricante' => $request->fabricante,
            'modelo' => $request->modelo,
            'cavalos' => $request->cavalos,
        ]);
        return $this->showAll();
    }
}
