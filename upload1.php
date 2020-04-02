<?php

session_start();

if(isset($_POST['submit']))
{

$servername="localhost";
$username="root";
$password="";
$dbname="epics";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("Connection failed: " .mysqli_connect_error());
}

$key=$_SESSION["email"];

echo $key;


$disease=$_POST['disease'];
$type=$_POST['type'];
$image=$_FILES['userfile']['name'];


$sql = "INSERT INTO photo (email,disease,type,image)
  VALUES ('$key','$disease','$type','$image')";

#mkdir()
if (!file_exists("Files/$key/$disease/$type")) {
      mkdir("Files/$key/$disease/$type", 0777, true);
  }

$path="Files/$key/$disease/$type/".basename($_FILES['userfile']['name']);

if(mysqli_query($conn,$sql))
{
  if(move_uploaded_file($_FILES['userfile']['tmp_name'],$path))
  {
    echo '<script language="javascript">';
    echo 'alert("File Uploaded Successfully :)");';
    echo 'window.location="upload.php";';
    echo '</script>';
  }
  else
  {
    echo "there was some problem";
  }
  #header("Location: details.html");
}

else {
  echo "ERROR: " . $sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);

}

 ?>
