<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Referral Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	#ian:hover{cursor:pointer;}
</style>
<body style="background:url(images/6.jpg) no-repeat; background-size:cover; opacity:0.9;>
<div class="container" style="width:500px;margin-top:200px;">
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" id="ian" name="login_btn">Login</button>
		</div>
	</form>

</div>
</body>
</html>