@extends('layout')
@section('titulo-pagina')
Formulario submetido
@endsection
@section('header')
Informação enviada através de form
@endsection
@section('conteudo')
<b>Nome:</b> {{$nome}} <br>
<b>Idade:</b> {{$idade}} <br>
<b>Morada:</b> {{$morada}} <br>
<b>NIF:</b> {{$nif}} <br>	
<b>Automóvel:</b> {{$automovel}}
@endsection