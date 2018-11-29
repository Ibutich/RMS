<?php  
include('functions.php');
if (isset($_POST['submit'])){
$ref_to = $_POST['ref_to'];
$date = $_POST['date'];
$name = $_POST['name'];
$doa = $_POST['doa'];
$age = $_POST['age'];
$ip = $_POST['ip'];
$sex = $_POST['sex'];
$prov_diag = $_POST['prov_diag'];
$present_comp = $_POST['present_comp'];
$clin_exam = $_POST['clin_exam'];
$inve = $_POST['inve'];
$treatment = $_POST['treatment'];
$reason = $_POST['reason'];
$rname = $_POST['rname'];
$sig = $_POST['sig'];
$date1 = $_POST['date1'];
}

if (isset($_POST['submit']))
 {
    $query =mysqli_query($db, "INSERT INTO referral_out(ref_to,date,name,doa,age,ip,sex,prov_diag,present_comp,clin_exam,inve,treatment,reason,rname,sig,date1) VALUES ('$ref_to','$date','$name','$doa','$age','$ip','$sex','$prov_diag','$present_comp','$clin_exam','$inve','$treatment','$reason','$rname ','$sig','$date1');")or die("Query failed:".mysqli_error($db));
    

    if($query)
    {
        echo "<script>alert('Referral Submitted.')</script>";
        header("Location:referral-out.php");
    }
  }

if (isset($_POST['submit_ref'])){
$dopc = $_POST['dopc'];
$time = $_POST['time'];
$called_by = $_POST['called_by'];
$design = $_POST['design'];
$call_rec = $_POST['call_rec'];
$design1 = $_POST['design1'];
$nrf = $_POST['nrf'];
$nop = $_POST['nop'];
$opd = $_POST['opd'];
$dob = $_POST['dob'];
$prov_diag = $_POST['prov_diag'];
$reason = $_POST['reason'];
$pmop = $_POST['pmop'];
$nrc = $_POST['nrc'];
$design2 = $_POST['design2'];
$sign = $_POST['sign'];
$nan = $_POST['nan'];
$desig = $_POST['desig'];
$sig= $_POST['sig'];
$temp = $_POST['temp'];
$pulse = $_POST['pulse'];
$resp = $_POST['resp'];
$bp = $_POST['bp'];
$spo2 = $_POST['spo2'];
$nrn = $_POST['nrn'];
$des = $_POST['des'];
$signe = $_POST['signe'];
$pmw = $_POST['pmw'];
$pat = $_POST['pat'];
$ipno = $_POST['ipno'];
$nho = $_POST['nho'];
$sin = $_POST['sin'];
$date2 = $_POST['date2'];
$time2 = $_POST['time2'];
$admn = $_POST['admn'];
$sing = $_POST['sing'];
$date3 = $_POST['date3'];
$tim = $_POST['tim'];
}

if (isset($_POST['submit_ref']))
{
    $query =mysqli_query($db, "INSERT INTO referral_in(dopc,time,called_by,design,call_rec,design1,nrf,nop,opd,dob,prov_diag,reason,pmop,nrc,design2,sign,nan,desig,sig,temp,pulse,resp,bp,spo2,nrn,des,signe,pmw,pat,ipno,nho,sin,date2,time2,admn,sing,date3,tim) VALUES ('$dopc','$time','$called_by','$design','$call_rec','$design1','$nrf','$nop','$opd','$dob','$prov_diag','$reason','$pmop','$nrc ','$design2','$sign','$nan','$desig','$sig','$temp','$pulse','$resp','$bp','$spo2','$nrn','$des','$signe','$pmw','$pat','$ipno','$nho','$sin','$date2','$time2','$admn','$sing','$date3','$tim');")or die("Query failed:".mysqli_error($db));
    

    if($query)
    {
        echo "<script>alert('Referral Submitted.')</script>";
        header("Location:referral-in.php");
       
    }
}

function get_referral_out(){
	global $db;
	$query = "SELECT * FROM referral_out";
	$result = mysqli_query($db,$query);
	while ($row=mysqli_fetch_array($result)){
		$id = $row['id'];
		$ref_to = $row['ref_to'];
		$name = $row['name'];
		$sex = $row['sex'];
		$age = $row['age'];
		$ip = $row['ip'];
		$date = $row['date'];
		$doa = $row['doa'];
		$prov_diag = $row['prov_diag'];
		$rname = $row['rname'];

		echo "<tr>
                  <td>$id</td>
                  <td>$ref_to</td>
                  <td>$name</td>
                  <td>$sex</td>
                  <td>$age</td>
                  <td>$ip</td>
                  <td>$date</td>
                  <td>$doa</td>
                  <td>$prov_diag</td>
                  <td>$rname</td>
                </tr>";
	}

}

function get_referral_in(){
	global $db;
	$query = "SELECT * FROM referral_in";
	$result = mysqli_query($db,$query);
	while ($row=mysqli_fetch_array($result)){
		$id = $row['id'];
		$dopc = $row['dopc'];
		$called_by = $row['called_by'];
		$call_rec = $row['call_rec'];
		$nrf = $row['nrf'];
		$nop = $row['nop'];
		$dob = $row['dob'];
		$prov_diag = $row['prov_diag'];
		$nan = $row['nan'];
		$pat = $row['pat'];
		$ipno = $row['ipno'];
		$nho = $row['nho'];
		$date2 = $row['date2'];
		$time2 = $row['time2'];
		$admn = $row['admn'];

		echo "<tr>
                  <td>$id</td>
                  <td>$dopc</td>
                  <td>$called_by</td>
                  <td>$call_rec</td>
                  <td>$nrf</td>
                  <td>$nop</td>
                  <td>$dob</td>
                  <td>$prov_diag</td>
                  <td>$nan</td>
                  <td>$pat</td>
                  <td>$ipno</td>
                  <td>$nho</td>
                  <td>$date2</td>
                  <td>$time2</td>
                  <td>$admn</td>
                </tr>";
	}

}
 
?>