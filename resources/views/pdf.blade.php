<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table class="ui celled table">
	<tr align="center">
		<th> ID </th>
		<th>  NOME </th>
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
</body>
</html>