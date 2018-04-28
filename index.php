<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- width, device-width, height, device-height, initial-scale, minimum-scale, maximum-scale, user-scalable -->
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
	<meta charset="utf-8">
	<title>Asynchronous JavaScript And CSS</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="form.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="ajc.js"></script>
	<script type="text/javascript" src="main.js"></script>
</head>
<body>
	<form id="ajc-form" action="validate.php" method="get">
		<label for="username">Name</label>
		<input type="text" name="username" required="true">
		<label for="password">Password</label>
		<input type="password" name="password" required="true">
		<input type="submit" value="login">
	</form>
</body>
</html>