<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    	<div class="header">
    		Home Page
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
  </head>
<body>
	<header><div class="jumbotron" style="background:url('images/6.jpg') no-repeat;background-size: cover; height: 250px;" >
</div>
</header>
<div class="container-fluid">
	<div class="well">
<div class="row">
	<div class="col-md-12">
	<div class="list-group">
		<a href="" class="list-group-item active" style="background-color: #3498DB; color:#ffffff; border-color:#3498DB ; ">Referral In </a>
		<a href="referral-in.php" class="list-group-item ">Referral In Form </a>
		<a href="referral-in-report.php" class="list-group-item ">Referral In Report</a>
	</div>
	<hr>
	<div class="list-group">
		<a href="" class="list-group-item active" style="background-color: #3498DB; color:#ffffff; border-color:#3498DB ;">Referral Out </a>
		<a href="referral-out.php" class="list-group-item ">Referral Out Form </a>
		<a href="referral-out-report.php" class="list-group-item ">Referral Out Report</a>
	</div>
	</div>
</div>
	</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</body>
</html>