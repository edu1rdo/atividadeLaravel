
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">agenda</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="tarefa.blade.php">tarefas</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Tenis</a>
              </li>
 
              
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar </button>
            </form>
          </div>
        </div>
      </nav>
tem menu de contexto

<x-layout title="login Cadastro">
	<div class="container">
		@foreach($dados as $dado)
		<li class="list-group-item">{{$dado->nome}}</li>
		<li class="list-group-item">{{$dado->telefone}}</li>
		<br><br>
		@endforeach
	</div>

	

<form action="/cadastrar/salvar" method="POST">
	@csrf <!--valida o formulario -->
		<br>
		<label>Nome:</label>
		<input type="text" id="nome" name="nome" placeholder="informe seu nome" required/> <br><br>

		<label> cpf: </label>
		<input type="text" id="telefone" name="telefone" placeholder="99999999999" required/> <br><br>

		<button type="submit">Enviar</button>
		<br><br>


</x-layout>