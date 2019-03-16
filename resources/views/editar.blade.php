<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Varela+Round');
	body {
		padding-top: 50px; 
		font-family: 'Varela Round', sans-serif;
	}

	form{
		margin-top: 20px;
	}
</style>
<body>
<div class="ui container">
<div>
	<h1> EDITAR CADASTRO </h1>
	<p> Pagina de Edição de Cadastro </p>
</div>
<hr>
<div>
	<form action="{{route('atualizar', $usuario->id)}}" method="post" class="ui form">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="put">
		<label> NOME: </label>
		<input type="text" required="" name="nome" value="{{isset($usuario->nome) ? $usuario->nome : ''}}"><br><br>
		<label> CPF: </label>
		<input type="text" required="" name="cpf" value="{{isset($usuario->cpf) ? $usuario->cpf : ''}}"><br><br>
		<div class="ui buttons">
			<input type="reset" name="limpar" value="Limpar" class="ui button">
						  <div class="or"></div>
			<input type="submit" name="atualizar" value="Atualizar" class="ui positive button">
		</div>
	</form>	
	<br><br>
<div>
	<a href="{{route('home')}}"><button class="ui button"> Voltar </button></a>
</div>
</div>
</div>
</body>
</html>