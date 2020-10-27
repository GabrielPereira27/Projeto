<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmController extends Controller
{
    //
	public function mostrarForm(){
		return view('contactos');
	}

	public function processarForm(Request $request)
	{
		$nome = $request ->nome;
		$idade = $request ->idade;
		$morada = $request ->morada;
		$nif = $request ->nif;

		return view('form-enviado' , [
			'nome' => $nome,
			'idade' => $idade,
			'morada' => $morada,
			'nif' => $nif
		]);
	}

}

}
