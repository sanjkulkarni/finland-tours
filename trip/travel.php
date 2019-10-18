<?php     //start php tag
//include connect.php page for database connection
include('connect.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$cnt=$_SESSION['cont'];
$guestno = $_POST['guestno'];
$datefrom = $_POST['datefrom'];
$dateto = $_POST['dateto'];


if(isset($_POST['fromcity'])){
$fromcity = $_POST['fromcity'];
}
else{
$fromcity="null";	
}

if(isset($_POST['airline'])){
$airline = $_POST['airline'];
}
else{
$airline="null";	
}

$transfer_mode = $_POST['transfer_mode'];

if(isset($_POST['hotel_helsinki'])){
$hotel_helsinki = $_POST['hotel_helsinki'];
}
else{
$hotel_helsinki="null";	
}


if(isset($_POST['hotel_rovan'])){
$hotel_rovan = $_POST['hotel_rovan'];
}
else{
$hotel_rovan="null";	
}

if(isset($_POST['hotel_turku'])){
$hotel_turku = $_POST['hotel_turku'];
}
else{
$hotel_turku="null";	
}

if(isset($_POST['hotel_stockholm'])){
$hotel_stockholm = $_POST['hotel_stockholm'];
}
else{
$hotel_stockholm="null";	
}



$hostname="localhost:3306"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="tripform";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);






$sql="INSERT Into travel (travel_id, guestno, datefrom, dateto, fromcity, airline, transfer_mode, hotel_helsinki, hotel_rovan, hotel_turku, hotel_stockholm) values('$cnt', '$guestno', '$datefrom', '$dateto', '$fromcity', '$airline', '$transfer_mode', '$hotel_helsinki', '$hotel_rovan', '$hotel_turku', '$hotel_stockholm')";
$r=mysqli_query($con,$sql);

//$sql="select count()"

Header("Location:card1.html");

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