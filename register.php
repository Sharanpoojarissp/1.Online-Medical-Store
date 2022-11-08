<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="styls.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<header><a href="index.php"  class="head"><h1>e-shoppe</h1><p>Shop with ease</p></a><br><br></header>
  <div class="header">
  <a href="index.php"><img src="" alt="" width=""></a>
  	<a href="register.php"><h1>Register</h1></a>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label for="user"><h2>Username</h2></label>&nbsp;&nbsp;&nbsp;
  	  <input type="text" name="username" placeholder="Enter username" id="user" required>
  	</div>
  	<div class="input-group">
  	  <label for="mail"><h2>Email</h2></label>&nbsp;&nbsp;&nbsp;
  	  <input type="email" name="email"  placeholder="Enter E-mail" id="mail" required>
  	</div>
  	<div class="input-group">
  	  <label for="pass"><h2>Password</h2></label>&nbsp;&nbsp;&nbsp;
  	  <input type="password" name="password_1" placeholder="Enter password" id="pass" required>
  	</div>
  	<div class="input-group">
  	  <label for="cpass"><h2>Confirm password</h2></label>&nbsp;&nbsp;&nbsp;
  	  <input type="password" name="password_2" placeholder="Re-enter password" id="cpass" required>
  	</div>&nbsp;&nbsp;&nbsp;&nbsp;
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		<br><h3>Already a member? </h3>
		  <a class="term"  href="login.php"><h3>Login here</h3></a>
  	</p>
  </form>
</body>
</html>