<?php

session_start();

 $fname = $_POST['frstname'];
 $lname = $_POST['lstname'];
 $Gender = $_POST['gender'];
 $Age = $_POST['Age'];
# $Date = $_POST['Date'];
 $ContactNumber = $_POST['Contact'];
 $BloodGroup = $_POST['blood'];
 $Country = $_POST['countries'];
 $State = $_POST['state'];
 $PinCode = $_POST['pin'];
 $Address = $_POST['addrs'];

 #if(!empty($fname)||!empty($lname)||!empty($Gender)||!empty($Age)||!empty($ContactNumber)||!empty($BloodGroup)||!empty($Country)||!empty($State)||!empty($PinCode)||!empty($Address))
 #{
   $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbname = "epics";

   $key=$_SESSION["email"];
   #echo $_SESSION["email"];

   $conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

   if(!$conn)
   {
     die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
   }

else {
  #$SELECT = "SELECT ContactNumber From details Where ContactNumber = ? Limit 1";
  $insert = "UPDATE details SET Fname='$fname' , Lname='$lname' , Gender='$Gender',
  Age='$Age' , BloodGroup='$BloodGroup' , Country='$Country', State='$State' , PinCode='$PinCode' ,
  Address='$Address' , ContactNumber='$ContactNumber' where Email='$key'";


  #$stmt = $conn->prepare($SELECT);
  #$stmt->bind_param("i",$ContactNumber);
  #$stmt->execute();
  #$stmt->bind_result($ContactNumber);
  #$stmt->store_result();
  #$rnum=$stmt->num_rows;

  if(mysqli_query($conn, $insert))
  {
    #$stmt->close();

    #$stmt=$conn->prepare($INSERT);
    #$stmt->bind_param("sssisssisi",$fname,$lname,$Gender,$Age,$BloodGroup,$Country,$State,$PinCode,$Address,$ContactNumber);
    #$stmt->execute();


#    session_start();
#    $_SESSION['contact']=$ContactNumber;

    #echo "New record inserted successfully";
      header("Location:homepage.php");

  }
  else {
    echo "Someone already registered using this number";
  }
}
#  $stmt->close();
  $conn->close();




#}
#}
# else {
#  echo "All fields are required!";
# die();
# }

 ?>
 <!--<html>
 <body>
   <input type="button" name="homepage" value="homepage" onclick="G:/xmp/htdocs/homepage.html">
   <button onclick="G:/xmp/htdocs/homepage.html">Homepageeeeee</button>
 </body>
 </html>
-->
