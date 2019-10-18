<?php     //start php tag
//include connect.php page for database connection
include('connect.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$hostname="localhost:3306"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="tripform";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);

$cname = $_POST['cardname'];
$cnum = $_POST['cardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];
$cont=$_SESSION['cont'];



$sql="INSERT into  card_payment (tourist_id ,cardname, cardnumber, expmonth, expyear, cvv) values('$cont', '$cname', '$cnum', '$expmonth', '$expyear', '$cvv')";
$r=mysqli_query($con,$sql);

echo'<script>alert("Inserted Successfully")</script>';

include("thx.html");




/*
if (!empty($cname) || !empty($cnum) || !empty($expmonth) || !empty($expyear) || !empty($cvv)) 
{ 
	$INSERT = "INSERT Into card_payment (tourist_id ,cardname, cardnumber, expmonth, expyear, cvv) values(? ,?, ?, ?, ?, ?)";
	
		$stmt = $con->prepare($INSERT);
		$stmt->bind_param("isissi",$cont, $cname, $cnum, $expmonth, $expyear, $cvv);
		$stmt->execute();
		echo'<script>alert("Inserted Successfully")</script>';
		include("about.html");
		}
		else
		{
		echo'<script>alert("Failed To Insert")</script>';
		}		
		
	
		$stmt->close();
		$con->close();
		
	
*/
	
?>	