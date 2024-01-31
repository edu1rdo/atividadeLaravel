<x-layout title="Tarefas">
	<div class="container">
		@foreach($dados as $dado)
		<li class="list-group-item">{{$dado->nome}}</li>
		<li class="list-group-item">{{$dado->telefone}}</li>
		<br><br>
		@endforeach
	</div>



	<x-layout title="addTarefas">
    <form action="/addtarefas/salvar" method="POST">
    @csrf
        <label>Nome da Tarefa:</label>
        <input type="text" id="nomeTarefa" name="nomeTarefa" required/><br><br>
           
        <label>Descrição da tarefa:</label>
        <input type="text" id="descTarefa" name="descTarefa" required/><br><br>
       
        <label>Data de entrega:</label>
        <input type="date" id="dataTarefa" name="dataTarefa" required/><br><br>
 
        <button type="submit">Enviar</button>
        <a href="consultar">Consultar</a>
    </form>
</x-layout>