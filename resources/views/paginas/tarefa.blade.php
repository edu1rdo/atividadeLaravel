

 <style>
        /* Adicione o seguinte estilo para centralizar o conteúdo */
        .container {
            text-align: center;
            margin-top: 50px; /* Ajuste conforme necessário */
        }

        /* Adicione margens aos itens da lista para separá-los */
        .list-group-item {
            margin: 5px 0;
        }
    </style>
	
	

    <div class="container">

	<x-layout title="addTarefas">
    <form action="/addtarefas/salvar" method="POST">
    @csrf
        <label>Nome da Tarefa:</label>
        <input type="text" id="nomeTarefa" name="nomeTarefa" required/><br><br>
           
        <label>Descrição da Tarefa:</label>
        <input type="text" id="descTarefa" name="descTarefa" required/><br><br>
       
        <label>Data de entrega:</label>
        <input type="date" id="dataTarefa" name="dataTarefa" required/><br><br>
 
        <button type="submit">Enviar</button>
        <a href="consultar">Consultar</a>
    </form>
    </div>
</x-layout>

