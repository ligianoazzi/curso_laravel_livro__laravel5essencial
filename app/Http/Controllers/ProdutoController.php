<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto; // model Produto

class ProdutoController extends Controller
{
    public function index()
    {
    	/*$dados = ['ola'=>'Mundo'];
    	return $dados;*/

    	$produtos = Produto::all(); // método estático ll, do módulo produto

    	return view('produtos',['prods'=>$produtos]);

    }
}
