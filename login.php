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

$email=$_POST['uname'];
$password=$_POST['psw'];
$salt=$_POST['uname'];
$salted=$password.$salt;

$hashed=password_hash($salted,PASSWORD_DEFAULT);

$sql = "SELECT Password from authent where Email='$email'";

$result=mysqli_query($conn,$sql);


if($result->num_rows > 0)
{
  $data=$result->fetch_array();
  if(password_verify($salted,$data['Password']))
  {
    $_SESSION["email"]=$email;
    header("Location: homepage.php");
  }

  else {
    #echo $selected;
     /*while($row = mysqli_fetch_assoc($result))
     {
       echo $row['Password'] . "<br>";
     }
    echo $salted;
    echo $hashed;*/
    echo '<script language="javascript">';
    echo 'alert("Invalid Credentials");';
    echo 'window.location="login.html";';
    echo '</script>';
    #header("Location: login.html");
  }
}

else{
  echo '<script language="javascript">';
  echo 'alert("You are not registered!\nPlease Signup to Proceed......");';
  echo 'window.location="login.html";';
  echo '</script>';
  #echo "ERROR: " . $sql . "<br>" .mysqli_error($conn);
}

mysqli_close($conn);
 ?>
