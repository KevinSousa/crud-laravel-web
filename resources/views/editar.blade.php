<!DOCTYPE html>
<html>
<head>
	<title> EDITAR </title>
</head>
<body>
<div>
	<h1> EDITAR CADASTRO </h1>
	<p> Pagina de Edição de Cadastro </p>
</div>
<div>
	<form action="{{route('atualizar', $usuario->id)}}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="put">
		<label> NOME: </label>
		<input type="text" required="" name="nome" value="{{isset($usuario->nome) ? $usuario->nome : ''}}"><br><br>
		<label> CPF: </label>
		<input type="text" required="" name="cpf" value="{{isset($usuario->cpf) ? $usuario->cpf : ''}}"><br><br>
		<input type="submit" value="SUBMIT">
	</form>	
</div>
</body>
</html>