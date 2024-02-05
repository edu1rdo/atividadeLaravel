
    <x-layout title="Login Cadastro">
   
  
    <div class="container">
		@foreach($dados as $dado)
		<li class="list-group-item">{{$dado->nomeTarefa}}</li>
		<li class="list-group-item">{{$dado->descTarefa}}</li>
        <li class="list-group-item">{{$dado->dataTarefa}}</li>
        <li class="list-group-item">{{$dado->updated_at}}</li>
        <li class="list-group-item">{{$dado->created_at}}</li>
		<br><br>
		@endforeach
	</div>
  
</x-layout>
