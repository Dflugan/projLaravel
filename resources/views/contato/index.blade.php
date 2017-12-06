@extends('layout.site')

@section('titulo','Contato')


@section('conteudo')
	<h3>Essa é a views index</h3>

	@foreach($contatos as $contato)
		<p>{{$contato->nome}}</p>
		<p>{{$contato->tel}}</p>
	@endforeach

@endsection