  @extends('layout.site')

  @section('titulo','Cursos')


  @section('conteudo')
  <div class="container">
        <h3 class="center">Essa é a views index</h3>
        <div class="row">
          <table>
            <thead>
              <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>imagem</th>
                <th>valor</th>
                <th>Publicação</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              @foreach($registros as $registro)
              <tr>
                <td>{{$registro->id}}</td>
                <td>{{$registro->titulo}}</td>
                <td>{{$registro->descricao}}</td>
                <td><img width="90" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"> </td>
                <td>{{$registro->valor}}</td>
                <td>{{$registro->publicado}}</td>
                <td>
                  <a class="btn depp-orange" href="{{route('admin.cursos.editar', $registro->id)}}">Editar</a>
                  <a class="btn red" href="{{route('admin.cursos.deletar', $registro->id)}}">Deletar</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="row">
          <a class="btn blue" href="{{route('admin.cursos.adicionar')}}">Adicionar</a>
        </div>
  </div>

  @endsection
