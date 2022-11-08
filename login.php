<?php include('server.php') ?>
<?php include('errors.php'); ?> 




<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="styls.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<header><a href="index.php"  class="head"><h1>e-shoppe</h1><p>Shop with ease</p></a><br><br></header>
  <div class="header">
  	<a href="login.php"><h1>Login</h1></a>
  </div>
	 
  <form method="post" action="login.php">
  	<div class="input-group">
  		<label for="login"><h2>Username </h2></label>&nbsp;&nbsp;&nbsp;
  		<input type="text" name="username" placeholder="Enter username" id="login" required>
  	</div>
  	<div class="input-group">
  		<label for="login1"><h2>Password</h2></label>&nbsp;&nbsp;&nbsp;
  		<input type="password" name="password" placeholder="Enter password" id="login1" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		<br><h3>Not registered?</h3><br>
		  <a class="term" href="register.php">
			  <h3>Register Now</h3></a>
  	</p>
  </form>
</body>
</html>
