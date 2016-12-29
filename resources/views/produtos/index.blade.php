@extends('welcome_2'); <!-- welcome_2.blade.php -->

<?php
/*
em welcome_2.blade.php tem um @yield('content') no meio do html
se eu colocar o @extends dele aqui
e tiver aqui uma section('content'), entao esse meu html daqui vai ser inserido dentro do welcome_2 
sendo que o controller retornou esse arquivo aqui, o produto.blade.php, mas esse aqui se inseriu dentro do welcome_2
*/
?>

@section('content')
 <div class="container">
 <h1>Produtos</h1>

 <table class="table table-striped table-bordered table-hover">
 <thead>
 <tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Descrição</th>
 <th>Editar</th>
 <th>Excluir</th>
 </tr>
 </thead>
 <tbody>

 @foreach($prods as $prod)

 <tr>
	 <td>{{ $prod->id }}</td>
	 <td>{{ $prod->nome }}</td>
	 <td>{{ $prod->descricao }}</td>
	 <td> <a href="{{ route('produtos.edit',['id'=>$prod->id]) }}" class="btn-sm btn-success">Editar</a> </td>
	 <td> <a href="{{ route('produtos.destroy',['id'=>$prod->id]) }}" class="btn-sm btn-danger">Remover</a> </td>
 </tr>
 @endforeach

 </tbody>
 </table>
 <button class="btn btn-primary" onclick="window.location.href='{{ route('produtos.create') }}'"> Cadastrar </button>



 </div>
 @endsection