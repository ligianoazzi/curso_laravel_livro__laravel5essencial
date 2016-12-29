<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $fillable = ['nome','descricao'];	// permitir dados em massa, no caso o formulário do form que precisou

	public function avaliacoes()
	{
		return $this->hasMany('App\AvaliacaoProduto'); // hasMany: tem muitos .... tem muitas avaliações
	}

	public function tags()
	{
		return $this->belongsToMany('App\Tag');// um proiduto pode ter muitas tags
	}





}
