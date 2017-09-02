<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
    <p>La siguiente persona desea suscribirse a la lista de correo de Ob's World:</p>
    <p>Nombre: {{ $input['name']}}</p>
    <p>Apellido: {{ $input['surname']}}</p>
    <p>Correo electrónico: {{ $input['email']}}</p>
    <p>Fecha de nacimiento: {{ $input['date_birth']}}</p>
	</body>
</html>
