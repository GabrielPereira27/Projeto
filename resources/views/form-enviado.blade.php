@extends('layout')
@section('titulo-pagina')
Formulario submetido
@endsection
@section('header')
@endsection
@section('conteudo')
<h2><b>Informação enviada através do form:</b></h2><br>
<b>Nome:</b> {{$nome}} <br>
<b>Idade:</b> {{$idade}} <br>
<b>Morada:</b> {{$morada}} <br>
<b>NIF:</b> {{$nif}} <br>	
@endsection