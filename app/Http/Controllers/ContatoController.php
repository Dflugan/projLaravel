<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
    	return 'Esse é o index do contatoController';
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
