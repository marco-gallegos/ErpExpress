<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario cliente</title>
</head>
<body>
	<form action="{{ url('cliente/create') }}" method="post" accept-charset="utf-8">
		{{ url('cliente/create') }}
		post
		{{ csrf_field() }}
		<div class="form-group">
			<label> Rfc<input type="text" name="rfc" value=""></label>
			<label> nombre<input type="text" name="nombre" value=""></label>
			<label> apellidos<input type="text" name="apellidos" value=""></label>
		</div>
		<div class="form-group">
			<button type="subbmit" class="btn btn-success">enviar</button>
		</div>
	</form>
</body>
</html>