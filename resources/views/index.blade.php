<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> CADASTRO </h1>
<form action="{{route('salvar')}}" method="post">
	{{ csrf_field() }}
	<label> NOME: </label>
	<input type="text" required="" name="nome" value="{{isset($user->nome) ? $user->nome : ''}}"><br><br>
	<label> CPF: </label>
	<input type="text" required="" name="cpf" value="{{isset($user->cpf) ? $user->cpf : ''}}"><br><br>
	<input type="submit" value="SUBMIT">
</form>	
<h1> LISTA DE FUNCIONARIOS </h1>
<table>
	<tr>
		<th> ID </th>
		<th>  NOME </th>
		<th> CPF </th>
		<th> AÇÃO </th>
	</tr>

	@foreach ($users as $user)
		<tr>
			<td> {{ $user -> id }} </td>
			<td> {{ $user -> nome }} </td>
			<td> {{ $user -> cpf }} </td>
			<td> <a href="{{route('remover', $user->id)}}"> DELETAR </a> <a href="{{route('editar', $user->id)}}"> EDITAR </a></td>
		</tr>
	@endforeach
</table>
</body>
</html>