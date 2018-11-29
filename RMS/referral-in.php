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
    <title>Referral In Form</title>

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
  <h2>PATIENT REFERRAL IN FORM</h2></div>
</div>

  </head>
  <body> 
  <div class="well">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
    <div align="center"><h3>Referral In Form</h3></div>
     
     <form role="form" class="form-horizontal" method="post" action="process.php">
   <div class="form-group">
               <div class="col-sm-6">
                <label>DATE OF PHONE CALL:</label>
                <input class="form-control" name="dopc"  type="date">
            </div> 
            
            <div class="col-sm-6">
                <label>TIME:</label>
                <input class="form-control" name="time" type="time">
            </div>
        </div>
  
        <div class="form-group">
            <div class="col-sm-6">
                <label>CALLED BY:</label>
                <input class="form-control" name="called_by" type="text">
            </div>
            <div class="col-sm-6">
                <label>DESIGN:</label>
                <input class="form-control" name="design" type="text">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label>CALL RECEIVED BY:</label>
                <input class="form-control" name="call_rec" type="text">
            </div>
            <div class="col-sm-6">
                <label>DESIGN:</label>
                <input class="form-control" name="design1" type="text">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <label>Name of the referring facility/hospital:</label>
                <input class="form-control" name="nrf" type="text">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-4">
                <label>Name of the Patient:</label>
                <input class="form-control" name="nop" type="text">
            </div>
            <div class="col-sm-4">
                <label>OPD.NO:</label>
                <input class="form-control" name="opd" type="text">
            </div>
            <div class="col-sm-4">
                <label>DOB:</label>
                <input class="form-control" name="dob" type="date">
            </div>
        </div>

      
        <div class="form-group">
            <label class="col-sm-12" for="TextArea">Provisional Diagnosis:</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="2" name="prov_diag" ></textarea>
            </div>
        </div>
        <div class="form-group">
          <label class="col-sm-12" for="TextArea">Reason for referral:</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="2" name="reason"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Previous Management of patient(Include investigations and results):</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="4" name="pmop"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-4">
                <label>Name of referring Clinician:</label>
                <input class="form-control" type="text" name="nrc">
            </div>
            <div class="col-sm-4">
                <label>Design:</label>
                <input class="form-control" type="text" name="design2">
            </div>
            <div class="col-sm-4">
                <label>Sign:</label>
                <input class="form-control" type="text" name="sign">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-4">
                <label>Name of accompanying nurse:</label>
                <input class="form-control" type="text" name="nan">
            </div>
            <div class="col-sm-4">
                <label>Design:</label>
                <input class="form-control" type="text" name="desig">
            </div>
            <div class="col-sm-4">
                <label>Sign:</label>
                <input class="form-control" type="text" name="sig">
            </div>
        </div>

        <h2><u><b>Condition of patient on arrival</b></u></h2>

        <div class="form-group">
            <div class="col-sm-3">
                <label>Temp:</label>
                <input class="form-control" type="text" name="temp">
            </div>
            <div class="col-sm-3">
                <label>Pulse:</label>
                <input class="form-control" type="text" name="pulse">
            </div>
            <div class="col-sm-2">
                <label>Resp:</label>
                <input class="form-control" type="text" name="resp">
            </div>
            <div class="col-sm-2">
                <label>Blood Pressure:</label>
                <input class="form-control" type="text" name="bp">
            </div>
            <div class="col-sm-2">
                <label>SPO2:</label>
                <input class="form-control" type="text" name="spo2">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-4">
                <label>Name of receiving nurse:</label>
                <input class="form-control" type="text" name="nrn">
            </div>
            <div class="col-sm-4">
                <label>Design:</label>
                <input class="form-control" type="text" name="des">
            </div>
            <div class="col-sm-4">
                <label>Sign:</label>
                <input class="form-control" type="text" name="signe">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Patient management while in outpatient(including drugs administered and requested investigations):</label>
            <div class="col-sm-12">
                <textarea class="form-control" rows="5" name="pmw"></textarea>
            </div>
        </div>
           
        <div class="form-group">
            <div class="col-sm-6">
                <label>Patient Admitted to:</label>
                <input class="form-control" type="text" name="pat">
            </div>
            <div class="col-sm-6">
                <label>IP NO:</label>
                <input class="form-control" type="text" name="ipno">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3">
                <label>Nurse Handing over:</label>
                <input class="form-control" type="text" name="nho">
            </div>
            <div class="col-sm-3">
                <label>Sign:</label>
                <input class="form-control" type="text" name="sin">
            </div>
            <div class="col-sm-3">
                <label>Date:</label>
                <input class="form-control" type="date" name="date2">
            </div>
            <div class="col-sm-3">
                <label>Time:</label>
                <input class="form-control" type="time" name="time2">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3">
                <label>Admitting Nurse:</label>
                <input class="form-control" type="text" name="admn">
            </div>
            <div class="col-sm-3">
                <label>Sign:</label>
                <input class="form-control" type="text" name="sing">
            </div>
            <div class="col-sm-3">
                <label>Date:</label>
                <input class="form-control" type="date" name="date3">
            </div>
            <div class="col-sm-3">
                <label>Time:</label>
                <input class="form-control" type="time" name="tim">
            </div>
        </div>

<input type="submit" name="submit_ref" value="Submit Referral" class="btn btn-primary"> 
    </form>
<div align="right"> <a href="referral-in-report.php?" class="btn btn-primary">View Summary</a></div>
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