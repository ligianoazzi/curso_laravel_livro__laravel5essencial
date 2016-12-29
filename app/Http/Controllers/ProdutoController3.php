<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController3 extends Controller
{
    public function index()
    {
    	$nome = 'Ligiano';
    	return view('produtos_3', ['nome'=>$nome]);
    }
}
