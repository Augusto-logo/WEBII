<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function index(){

        $pizzas = Pizza::all();

        return view('home',['pizzas' => $pizzas]);

    }

    public function create(){

        return view('crud');

    }

    public function store(Request $request){

        $pizza = new Pizza();

        $pizza->nome = $request->nome;
        $pizza->tamanho = $request->tamanho;
        $pizza->preço = $request->preco;
        $pizza->nota = $request->nota;
        $pizza->vegetariana = $request->vegetariana;

        $pizza->save();

        return redirect('/')->with('msg', 'Pizza cadastrada com sucesso!');
    }

    public function edit($id) {

        $pizzas = Pizza::findOrFail($id);

        return view('edit', ['pizzas' => $pizzas]);

    }

    public function update(Request $request) {
        
        $data = $request->only(['nome', 'tamanho', 'preco', 'nota', 'vegetariana']);

        Pizza::findOrFail($request->id)->update($data);

        return redirect('/')->with('msg', 'Pizza editada com sucesso!');
    }

    public function destroy($id) {

        Pizza::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Pizza excluída com sucesso!');

    }

    
}
