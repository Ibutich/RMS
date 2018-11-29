<?php include('process.php');
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
    <title>Referral Out Summary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <a href="index.php?logout='1'" style="color: red;">logout</a>
  <div class="jumbotron" style="background:url('images/6.jpg') no-repeat;background-size: cover; height: 150px;">
  <div align="center"><h1>KERICHO COUNTY REFERRAL HOSPITAL</h1>
  <h2 class="sub-header">PATIENT REFERRAL OUT SUMMARY</h2></div>
</div>
  </head>
  <body> 
   <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Referral to</th>
                  <th>Name</th>
                  <th>Sex</th>
                  <th>Age</th>
                  <th>IP NO.</th>
                  <th>Date</th>
                  <th>DOA</th>
                  <th>Provisional Diagnosis</th>
                  <th>Referring Clinician's Name</th>
                </tr>
              </thead>
              <tbody>
                <?php get_referral_out(); ?>
              </tbody>

  </table> 
</div>
  <div align="right"> <a href="referral-out.php?" style="color: blue;">Go Back</a></div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>    