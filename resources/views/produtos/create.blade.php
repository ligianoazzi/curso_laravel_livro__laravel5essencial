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
 <h1>Novo Produto</h1>

 @if ($errors->any())
	 <ul class="alert alert-warning">
	 @foreach($errors->all() as $error)
	 <li>{{ $error }}</li>
	 @endforeach
	 </ul>
 @endif


<!-- {!! Form::open(['url'=>'produtos/store']) !!} -->
 {!! Form::open(['route'=>'produtos.store']) !!}


 <!-- Nome Form Input -->

 <div class="form-group">
 {!! Form::label('nome', 'Nome:') !!}
 {!! Form::text('nome', null, ['class'=>'form-control']) !!}
 </div>

 <!-- Descricao Form Input -->

 <div class="form-group">
 {!! Form::label('descricao', 'Descrição:') !!}
 {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
 </div>

 <div class="form-group">
 {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 </div>
 @endsection