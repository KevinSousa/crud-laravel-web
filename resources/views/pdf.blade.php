<!DOCTYPE html>
<html>
<head>
	<title> Dados dos Usuários </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
</head>
<body>
<h1> Todos os Usuários </h1>
<div class="ui container">
<table class="ui celled table">
	<tr align="center">
		<th> ID </th>
		<th> NOME </th>
		<th> CPF </th>
	</tr>

	@foreach ($users as $user)
		<tr align="center">
			<td> {{ $user -> id }} </td>
			<td> {{ $user -> nome }} </td>
			<td> {{ $user -> cpf }} </td>
		</tr>
	@endforeach
</table>
</div>
</body>
</html>