<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="carrental";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn){
  die("connection failed:" . mysqli_connect_error());
}
if(isset($_POST['save'])){

  $name = $_POST['name'];
	$address = $_POST['address'];
	$bookingdate = $_POST['bookingdate'];
	$bookingtime = $_POST['bookingtime'];
	$returndate = $_POST['returndate'];
	$returntime = $_POST['returntime'];
  $phonenumber = $_POST['phonenumber'];
  $selectcar = $_POST['selectcar'];

  $sql_query = "INSERT INTO carrenttable (name,address,bookingdate,bookingtime,returndate,returntime,
  phonenumber,selectcar) VALUES('$name','$address','$bookingdate','$bookingtime','$returndate','$returntime',
    '$phonenumber','$selectcar')";
    if(mysqli_query($conn,$sql_query)){
      // <script>alert("New Details Entered Successfully ");</script>
      echo "<script>alert('REGISTRATION SUCCESSFULLY!');</script>";


    }
    else{
      echo "error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>