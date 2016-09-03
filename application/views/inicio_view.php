<!DOCTYPE HTML>
<html lang=“en-US”>
<head>
	<meta charset=“UTF-8”>
	<title>Login</title>
</head>
<body>
	<div id=“container”>
		<h1>Login</h1>
		<?php echo form_open("inicio/login"); ?>
			<label for="">Usuario:</label>
			<input type="text" name="user" id="user">
			<br>
			<label for="">Password:</label>
			<input type="password" name="pass" id="pass">
			<br>
			<input type="submit" value="Entrar">
		<?php echo form_close(); ?>
	</div>
</body>
</html>