



<x-layout title="Login Cadastro">
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
     
  

    <form action="/cadastrar/salvar" method="POST">
        @csrf <!-- Valida o formulário -->
        <br>
        <label>Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Informe seu nome" required/> <br><br>

        <label>CPF:</label>
        <input type="text" id="cpf" name="cpf" placeholder="99999999999" required/> <br><br>

        <button type="submit">Enviar</button>
        <br><br>
    </form>
	</div>
</x-layout>
