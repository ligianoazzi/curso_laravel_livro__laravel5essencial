<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto; // model Produto
use App\Http\Requests\ProdutoRequest;


class ProdutoController4 extends Controller
{
        public function index()
	    {
	    	/*$dados = ['ola'=>'Mundo'];
	    	return $dados;*/

	    	$produtos = Produto::all(); // método estático ll, do módulo produto

	    	return view('produtos.index',['prods'=>$produtos]);


	    }

		public function create()
		{
			return view('produtos.create');
		}



		public function store(ProdutoRequest $request)
		{
			$input = $request->all(); // pegando dados do form

			Produto::create($input); // salvando

			//return redirect('produtos');
			return redirect('chama_produto_blade');
			//return redirect()->route('produtos');
		}

		public function destroy($id)
		{
			Produto::find($id)->delete();

			return redirect('chama_produto_blade');
		}




		public function edit($id)
		{
			$produto = Produto::find($id);

			return view('produtos.edit', compact('produto'));
		}







		public function update(ProdutoRequest $request, $id)
		{
			$produto = Produto::find($id)->update($request->all());

 			return redirect('chama_produto_blade');
 			// return redirect()->route('produtos');
		}




}
