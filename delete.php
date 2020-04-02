<?php

session_start();

if($_SESSION["email"]==true)
{

}
else
{
    header("Location: login.html");
}

  $servername="localhost";
  $username="root";
  $password="";
  $dbname="epics";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
  }

  $key=$_SESSION["email"];
  //echo "hello";
  if($_GET['op']=="delete")
  {
    $img_del=$_GET['rowimage'];
    $disease=$_GET['disease'];
    $type=$_GET['type'];
    $del_query="DELETE FROM photo WHERE Email='$key' AND Disease='$disease' AND Type='$type' AND Image='$img_del';";
    //$result=mysqli_query($conn,$del_query);
    if(mysqli_query($conn,$del_query))
    {
      //echo "in.$key.$disease.$type.$img_del";
      echo "<script language='javascript'>";
      echo "alert('Deleted');";
      unlink("Files/$key/$disease/$type/$img_del");
      echo "window.location='display.php';";
      echo "</script>";
    }
    else{
      //echo "out";
      echo "<script language='javascript'>";
      echo "alert('Some error has ocurred');";
      echo "window.location='display.php';";
      echo "</script>";
    }
  }
?>
