<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Librería</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<h2>Librería</h2>
	<form action="/form" method="POST">
		<label>Nombre:</label>
		<input type="text" name="nombre"/><br/>

		<label>Nick:</label>
		<input type="nick" name="nick"/><br/>

		<label>Email:</label>
		<input type="email" name="email"/><br/>

		<label>Password:</label>
		<input type="password" name="password"/><br/>

		<label>Telefono:</label>
		<input type="telefono" name="telefono"/><br/>

		<input type="submit" name="enviar"/>
	</form>
	</body>
</html>
