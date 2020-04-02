<?php
sessio_start();

$servername="localhost";
$username="root";
$password="";
$dbname="epics";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("Connection failed: " .mysqli_connect_error());
}

$key=$_SESSION["email"];
if(!empty($_POST)){

        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $salted=$current_password.$salt;
        if($check_current_password != '' && $check_new_password != ''){
          $sql = "SELECT Password from authent where Email='$key'";

          $result=mysqli_query($conn,$sql);
          if($result->num_rows > 0)
          {
            $data=$result->fetch_array();
            if(password_verify($salted,$data['Password']))
            {
              $saltedd=$new_password.$salt;

              $hashed=password_hash($saltedd,PASSWORD_DEFAULT);
              $update="UPDATE authent SET password='$hashed' where Email='$key'";

              if(mysqli_query($conn, $update))
              {
                echo "hello";
                echo "<script language='javascript'>";
                echo "alert('Password Updated Successfully');";
                echo "window.location='settings.php';";
                echo "</script>";
              }
              else{
                echo "nello";
                echo "<script type='javascript'>";
                echo "alert('Password not changed)";
                echo "window.location='changepwd.php'";
              }

            }

            else {

              echo '<script language="javascript">';
              echo 'alert("Invalid Current Password");';
              echo 'window.location="changepwd.php";';
              echo '</script>';
              
            }
      }
      else {
          $error = 'Please provide both your current password and your new password.';
      }

 ?>
