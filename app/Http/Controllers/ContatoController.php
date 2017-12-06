<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {	
        $contatos = [
            (object)['nome'=>'Flavio', 'tel'=>'965459012'],
            (object)['nome'=>'Luciana', 'tel'=>'980337926']
        ];
    	return view('contato.index', compact('contatos'));
    }

    public function criar(Request $form)
    {
    	dd($form->all());
    	return 'Esse é o criar do contatoController';
    }

    public function editar()
    {
    	return 'Esse é o editar do contatoController';
    }
}
