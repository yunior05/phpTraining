<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = array(
            array(
                'type' => 'peperonni',
                'price' => 5
            ),array(
                'type' => 'hawuaian',
                'price' => 25
            ),array(
                'type' => 'cheese',
                'price' => 15
            )
            );
        return view('pizza', ['pizzas' => $pizzas]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
