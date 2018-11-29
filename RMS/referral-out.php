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
    <title>Referral Out Form</title>

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
  <h2>PATIENT REFERRAL OUT FORM</h2></div>
</div>
  </head>
  <body> 
  <div class="well">
  <div class="container-fluid">
    <div class="col-md-12">

 <form role="form" class="form-horizontal" method="post" action="process.php">
 	 <div class="form-group">
            <div class="col-sm-6">
                <label>Referral to:</label>
                <div class="form-group" style="padding-left:13px">
                    <select class="form-control input-sm" name="ref_to">
                        <option >---Select---</option>
                        <option value="MRTH">MRTH</option>
                        <option value="KNH">KNH</option>
                        <option value="TENUEK">TENUEK</option>
                        <option value="LITEIN">LITEIN</option>
                        <option value="KIJABE">KIJABE</option>
                        <option value="NAKURU">NAKURU</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <label>Date:</label>
                <input class="form-control" name="date" type="date">
            </div>
        </div>
 	
        <div class="form-group">
            <div class="col-sm-6">
                <label>Name:</label>
                <input class="form-control" name="name" type="text">
            </div>
            <div class="col-sm-6">
                <label>DOA:</label>
                <input class="form-control" name="doa" type="date">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label>Age:</label>
                <input class="form-control" name="age" type="text">
            </div>
            <div class="col-sm-6">
                <label>IP/No:</label>
                <input class="form-control" name="ip" type="text">
            </div>
        </div>

      <div class="col-sm-12">
                <label>Sex:</label>
                <div class="form-group">
                    <select class="form-control input-sm" name="sex">
                        <option>---Select---</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

        <div class="form-group">
            <label class="col-sm-12" for="TextArea">Provisional Diagnosis:</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="3" name="prov_diag"></textarea>
            </div>
        </div>
        <div class="form-group">
        	<label class="col-sm-12" for="TextArea">Presenting complaints:</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="3" name="present_comp"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Clinical examination:</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="3" name="clin_exam"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Investigation:</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="3" name="inve"></textarea>
            </div>
        </div>
           
        <div class="form-group">
            <label class="col-sm-12">Treatment:</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="3" name="treatment"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Reason for referral:</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="3" name="reason"></textarea>
            </div>
        </div>
           
           
        <div class="form-group">
            <div class="col-sm-4">
                <label>Referring Clinician's Name:</label>
                <input class="form-control" name="rname" type="text">
            </div>
            <div class="col-sm-4">
                <label>Signature:</label>
                <input class="form-control" name="sig" type="text">
            </div>
            <div class="col-sm-4">
                <label>Date:</label>
                <input class="form-control" name="date1" type="date">
            </div>
        </div>
       <input type="submit" name="submit" value="Submit Referral" class="btn btn-primary"> 
    </form>
    <div align="right"> <a href="referral-out-report.php?" class="btn btn-primary">View Summary</a></div>
		</div>
	</div>
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
</html>