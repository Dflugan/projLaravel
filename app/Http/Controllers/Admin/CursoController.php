<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
      $registros = Curso::all();
      return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }
    public function salvar(Request $req)
    {
        $dados = $req->all();

        if ($dados['publicado']) {
          $dados['publicado'] = 'sim';
        }else {
          $dados['publicado'] = 'não';
        }

        if ($req->hasFile('imagem')) {
          $imagem = $req->file('imagem');
          $num = rand(1111, 9999);
          $dir = "img/cursos";
          $extensao = $imagem->guessClientExtension();
          $nomeImagem = 'imagem_'.$num.'.'.$extensao;
          $imagem->move($dir, $nomeImagem);
          $dados['imagem'] = $dir.'/'.$nomeImagem;
        }
        Curso::create($dados);
        return redirect()->route('admin.cursos');
    }

    ////INICIO METODO ***EDITAR
    public function editar($id)
    {
        $registro = Curso::find($id);
        return view('admin.cursos.editar', compact('registro'));
    }
    ////FIM METODO ***EDITAR


    public function atualizar (Request $req, $id)
    {
        $dados = $req->all();

        if (isset($dados['publicado'])) {
          $dados['publicado'] = 'sim';
        }else {
          $dados['publicado'] = 'nao';
        }

        if ($req->hasFile('imagem')) {
          $imagem = $req->file('imagem');
          $num = rand(1111, 9999);
          $dir = "img/cursos/";
          $extensao = $imagem->guessClientExtension();
          $nomeImagem = 'imagem_'.$num.'.'.$extensao;
          $imagem->move($dir, $nomeImagem);
          $dados['imagem'] = $dir.'/'.$nomeImagem;
        }

        Curso::find($id)->update($dados);
        return redirect()->route('admin.cursos');
    }

    ////METODO ****Deletar
    public function deletar($id)
    {
      Curso::find($id)->delete();
      return redirect()->route('admin.cursos');
    }


}
