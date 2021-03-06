<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reporte en PDF</title>
	<style>
		body {
			font-family: Helvetica;
		}
		table {
			border-collapse: collapse;
		}
		table th,
		table td {
			font-size: 14px !important;
		}
		table th {
			background-color: gray;
			color: white;
			text-align: center;
		}
		table td {
			border: 1px solid silver;
			padding: 10px;
		}
	</style>
</head>
<body>
	<table>
	<thead>
		<tr>
			<th> Id </th>
			<th> Nombre Completo </th>
			<th> Documento </th>
			<th> Correo Electrónico </th>
			<th> Telefóno </th>
			<th> Dirección </th>
			<th> Foto </th>
		</tr>
	</thead>
	@foreach($users as $user)
		<tr>
			<td> {{ $user->id }} </td>
			<td> {{ $user->fullname }} </td>
			<td> {{ $user->document }} </td>
			<td> {{ $user->email }} </td>
			<td> {{ $user->phone }} </td>
			<td> {{ $user->address }} </td>
			<td> <img src="{{ public_path() . '/' . $user->photo }}" width="40px"> </td>
		</tr>
	@endforeach
</table>
</body>
</html>