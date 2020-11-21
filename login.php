<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:#ccffff">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 

  <form method="post" action="authen_login.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="user_id" id="user_id">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="user_pass" id="user_pass">
  	</div>
	
  	<div class="input-group">
  		<button type="submit" class="btn" name="submitted" value="true">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>