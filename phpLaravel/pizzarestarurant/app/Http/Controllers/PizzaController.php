<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        //Example with filter
        //$pizzas = Pizza::where('type', 'hawuaiian')->get();

        $pizzas = Pizza::all();

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        $pizza = new Pizza(); 
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->price = 15;
        $pizza->size = request('size');
        $pizza->toppings = request('toppings');
        $pizza->save();

        return redirect('/')->with('mssg', 'Your order has been processed');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/');
    }
}
