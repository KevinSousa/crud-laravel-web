<!DOCTYPE html>
<html>
<head>
	<title> ADMIN </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	
	<link rel="shortcut icon" href="icon/icon.ico" >
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Varela+Round');
	body {
		padding-top: 50px; 
		margin-bottom: 100px;
		font-family: 'Varela Round', sans-serif;
	}
</style>
<body>
<div class="ui container">
<h1> CADASTRO </h1>
<p> Área de Cadastro dos Funcionários </p>
<hr>
<form action="{{route('salvar')}}" method="post" class="ui form">
	{{ csrf_field() }}
	<label> NOME: </label>
	<input type="text" required="" name="nome" value="{{isset($user->nome) ? $user->nome : ''}}"><br><br>
	<label> CPF: </label>
	<input type="text" required="" name="cpf" value="{{isset($user->cpf) ? $user->cpf : ''}}"><br><br>
	<div class="ui buttons">
		<input type="reset" name="limpar" value="Limpar" class="ui button">
					  <div class="or"></div>
		<input type="submit" name="cancelar" value="Cadastrar" class="ui positive button">
	</div>
</form>	

<h1> LISTA DE FUNCIONARIOS </h1>
<p> Lista dos Funcionários cadastrados</p>
<hr>
<table class="ui celled table">
	<tr align="center">
		<th> ID </th>
		<th>  NOME </th>
		<th> CPF </th>
		<th> AÇÃO </th>
	</tr>

	@foreach ($users as $user)
		<tr align="center">
			<td> {{ $user -> id }} </td>
			<td> {{ $user -> nome }} </td>
			<td> {{ $user -> cpf }} </td>
			<td> <a href="{{route('remover', $user->id)}}"><i class="times icon"></i></a><a href="{{route('editar', $user->id)}}"><i class="pencil alternate icon"></i></a></td>
		</tr>
	@endforeach
</table>
</div>
{{-- 	<script>
		$('.rm').on('click', function(event){
			event.preventDefault();
			var that = $(this);
			var userId = $(this).attr('id');
			$.ajax({
				url: "http://localhost:8000/remover/"+userId,
				success: function(){
					that.parent().parent().remove();
				}
			});
		});
	</script> --}}
</body>
</html>