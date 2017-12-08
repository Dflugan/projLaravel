<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    ////INICIO METODO ***LOGIN INDEX
    public function index()
    {
      return view('login.index');
    }
    ////FIM METODO ***LOGIN INDEX

    ////INICIO METODO ***LOGIN ENTRAR
    public function entrar(Request $req)
    {
      $dados = $req->all();

      if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']])) {
        return redirect()->route('admin.cursos');
      }else {
        return redirect()->route('site.login');
      }
    }
    ////FIM METODO ***LOGIN ENTRAR

    ////ENTRAR METODO ***LOGIN SAIR
    public function sair()
    {
      Auth::logout();
      return redirect()->route('site.home');
    }
    ////FIM METODO ***LOGIN SAIR


}
