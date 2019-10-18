<?php     //start php tag
//include connect.php page for database connection
include('connect.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];


$hostname="localhost:3306"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="tripform";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);


$sql="select * from count";
$r=mysqli_query($con,$sql);
$ret=mysqli_fetch_assoc($r);
$cnt=$ret['c']+1;
$_SESSION['cont']=$cnt;
$qur="update count  set c='$cnt'";
$r=mysqli_query($con,$qur);




$sql="INSERT Into booking (book_id,firstname, lastname, address, email, phone, dob) values('$cnt','$firstname', '$lastname', '$address', '$email', '$phone', '$dob')";
$r=mysqli_query($con,$sql);

//$sql="select count()"

Header("Location:bookdetails3.html");

/*
if (!empty($firstname) || !empty($lastname) || !empty($address) || !empty($email) || !empty($phone) || !empty($dob) || !empty($guestno) || !empty($datefrom) || !empty($dateto) || !empty(fromcity) || !empty($airline) || !empty($transfer_mode) || !empty($hotel_helsinki) ||!empty($hotel_rovan) ||!empty($hotel_turku) ||!empty($hotel_stockholm)) 
{ 
	$INSERT = "INSERT Into booking (firstname, lastname, address, email, phone, dob, guestno, datefrom, dateto, fromcity, airline, transfer_mode, hotel_helsinki, hotel_rovan, hotel_turku, hotel_stockholm) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	
		$stmt = $con->prepare($INSERT);
		$stmt->bind_param("ssssssisssssssss", $firstname, $lastname, $address, $email, $phone, $dob, $guestno, $datefrom, $dateto, $fromcity, $airline, $transfer_mode, $hotel_helsinki, $hotel_rovan, $hotel_turku, $hotel_stockholm);
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