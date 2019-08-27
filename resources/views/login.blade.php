<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<H2>Login</H2>
				<hr>
				<form method="post" action="loginpost">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					Email: <input type="text" name="email">
					Password: <input type="text" name="password"> <br>
					<input type="submit" name="login">
				</form>
				<?php
				if ($errors->all()){
					foreach($errors->all() as $value){
						print_r($value.'<br>');
					}
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>