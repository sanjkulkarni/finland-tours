<?php
$hostname="localhost:3306"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="tripform";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);
if(! $con)
{
        die('Connection Failed'.mysqli_connect_error());
}
$db_select = mysqli_select_db($con,$database);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}

?>
 