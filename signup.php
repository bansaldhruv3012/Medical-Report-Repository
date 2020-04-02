<?php

session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="epics";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("Connection failed: " .mysqli_connect_error());
}

$email=$_POST['email'];
$password=$_POST['psw'];
$salt=$_POST['email'];
$salted=$password.$salt;

$hashed=password_hash($salted,PASSWORD_DEFAULT);

$sql1 = "INSERT Into details (Fname,Lname,Gender,Age,BloodGroup,Country,
  State,PinCode,Address,ContactNumber,email) values('fname','lname','gender',
  '4','blodgrop','country','state','pincode','addrss','contactnumber','$email');";

$sql = "INSERT into authent values ('$email','$hashed')";

if(mysqli_query($conn,$sql1))
{

}


if(mysqli_query($conn,$sql))
{
  $_SESSION["email"]=$email;
  header("Location: details.php");
}

else {
  echo "ERROR: " . $sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
 ?>
