<?php

session_start();

if($_SESSION["email"]==true)
{

}
else
{
    header("Location: login.html");
}
$key=$_SESSION["email"];

$Age = $_POST['Age'];
$ContactNumber = $_POST['Contact'];
$BloodGroup = $_POST['blood'];
$Country = $_POST['countries'];
$State = $_POST['state'];
$PinCode = $_POST['pin'];
$Address = $_POST['addrs'];


  $servername="localhost";
  $username="root";
  $password="";
  $dbname="epics";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
  }

else
{
  $update="UPDATE details SET Age='$Age' , BloodGroup='$BloodGroup' , Country='$Country',
  State='$State' , PinCode='$PinCode' ,Address='$Address' , ContactNumber='$ContactNumber' where Email='$key'";

  if(mysqli_query($conn, $update))
  {
    echo "hello";
    echo "<script language='javascript'>";
    echo "alert('Data Updated Successfully');";
    echo "window.location='showw.php';";
    echo "</script>";
  }
  else{
    echo "nello";
    echo "<script type='javascript'>";
    echo "alert('Data is not Updated')";
    echo "window.location='edit.php'";
  }
}
$conn->close();
?>
