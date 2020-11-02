@extends ('layout')
@section ('titulo-pagina')
Contactos
@endsection
@section ('header')
Fale connosco
@endsection
@section ('conteudo')

	<!-- aqui fica o form -->
<form method="post" action="{{route('processar.form')}}">
	@csrf
	<label for="nome">Nome</label>
	<input type="text" name="nome">
	<br>

	<label for="morada">Idade</label>
	<input type="text" name="idade">
	<br>

	<label for="morada">Morada</label>
	<input type="text" name="morada">
	<br>

	<label for="morada">Telefone</label>
	<input type="text" name="telefone">
	<br>

	<button type="submit">Enviar</button>
</form>
@endsection
