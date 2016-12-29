<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoProduto extends Model
{
	protected $fillable = [
		'produto_id',
		'nota',
		'comentario'
	];

	public function produto()
	{
		return $this->belongsTo('App\Produto'); /// belongsTo : pertence a
		//Isto é, o meu model atual, pertence a um model de Produto, simples assim!

		// um produto pode ter várias avaliações
	}

}
