



<x-layout title="login Cadastro">
	<div class="container">
		@foreach($dados as $dado)
		<li class="list-group-item">{{$dado->nome}}</li>
		<li class="list-group-item">{{$dado->telefone}}</li>
		<br><br>
		@endforeach
	</div>

	

<form action="/cadastrar/salvar" method="POST" >
	@csrf <!--valida o formulario -->
		<br>
		<label>Nome:</label>
		<input type="text" id="nome" name="nome" placeholder="informe seu nome" required/> <br><br>

		<label> cpf: </label>
		<input type="text" id="telefone" name="telefone" placeholder="99999999999" required/> <br><br>

		<button type="submit">Enviar</button>
		<br><br>


</x-layout>