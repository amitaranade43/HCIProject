<html>
<head>
  <title>Shape Up </title>
  <script type="text/javascript"> 
  function beforeSubmit
  {
  	var phoneno=document.myform.phone.value;
	if(phoneno.length<10)
	{
		alert("invalid phoneno");
		return false;
	}
  }
  </script>
</head>
<body style="background:#ccffff">
  <link rel="stylesheet" type="text/css" href="style.css">
  <div class="header">
  	<h2>Register</h2>
  </div> 
  <form method="post" action="doregister.php" name="myform">
  <div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" id="name">
  	</div>
	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" id="email">
  	</div>
		<div class="input-group">
  	  <label>Phone no</label>
        <input type="text" name="phone" id="phone">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	<input type="text" name="user_id" id="user_id">
  	</div>
    <div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="user_pass" id="user_pass">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="pwd">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user" onsubmit="return BeforeSubmit();">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>