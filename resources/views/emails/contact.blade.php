<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mensaje recibido</title>
</head>
<body>
	<h1>Te responderemos a la brevedad posible</h1>
	nombre: {{ $msg->nombre }} <br>
	email: {{ $msg->email }} <br>

	mensaje: {{ $msg->contenido }}
</body>
</html>