<?php

session_start();

if($_SESSION["email"]==true)
{

}
else
{
    header("Location: login.html");
}

?>

<html lang="en" dir="ltr">
  <head>
    <title>Report Repository</title>
    <link rel="shortcut icon" type="image/png" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>

    #back_img {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url("background6.jfif");
      background-repeat: no-repeat;
      //width: 100%;
      //height: 100%;
      background-size: cover;
      //background-size: 50% 50%;
      //background-color: red;
    }


    .header{
      padding-top: 15px;
      height: 100px;
      //text-align: center;
      margin-left: 600px;
      //background: lightgrey;
      color: black;
      font-size: 20px;
    }



    /* Create two unequal columns that floats next to each other */
    .column {
      float: left;
      padding: 10px;
      height: 86.8vh;
       /* Should be removed. Only for demonstration */
    }

    .left {
      width: 10%;
      //height :auto;
      position: fixed;
      //height: 100vh;
      top: 100px;
      overflow: none;
      background-color: #3d5c5c;
    }



    .navbar-nav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 0;
      margin-left: 5px;
      text-decoration: none;
      font-size: 17px;
    }

   .nav-item a:hover {
      background-color: #b3b3b3;
      color: black;
  }

    #point{
      cursor: auto;
    }

   /*.nav-item a.active {
      background-color: #3d5c5c;
      color: white;
    }*/
    /* For toggable tab*/
    #left{
      width: 50%;
      padding-top: 100px;
      background-color: white;
    }

    #right{
      width: 50%;
      padding-top: 130px;
      padding-left: 50px;
      text-align: justify;
    }

    .hr{
       border-top: 1px solid;
       border-color: white;
       margin-top: 15px;
       margin-bottom: 15px;
    }

    .vl{
        border-left: 1px solid;
        margin-left: 4px;
        margin-right: 0px;
        border-color: white;
        //width: 3px;
    }

    #bttn, #back, #bttn1, #back1{
      background-color: #ED1F24;
      color: white;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      outline: none;
      width: 110px;
      height: 40px;
    }

    #bttn:hover, #back:hover, #bttn1:hover, #back1:hover{
      background-color: #00a950;
    }

    .right {

      width: 100%;
      padding: 0;
      margin: 0;
      //margin-left: 9.8%;
      overflow: scroll;
      left: 9%;
      right: 0;
     position: fixed;
      //background-color: yellow;
    }

    #img{
      float: left;
      margin: 5px;
      margin-bottom: 1px;
      width: 430px;
      height: 300px;
    }

    .row1{
      width: 430px;
      //background-color: green;
      height: 50px;
    }

    #left1{
      width: 50%;
      height: 50px;
      //background-color: red;
    }

    #right1{
      width: 50%;
      height: 50px;
      //background-color: green;
      //text-align: justify;
    }

    .img_container
    {
      //background-color: blue;
      margin-left: 7px;
      margin-right:25px;
      display: inline-grid;
      width: 430px;
    }

    /*.img_container1
    {
      background-color: red;
      display: inline-block;
      width: 430px;
    }*/

    #div{
      float: left;
      width: 33.3%;
      height: 350px;
      padding: 5px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /*#form{
      display: block;
    }
*/
    #output{
      display: none;
      box-sizing: border-box;
      border: 3px solid grey;
      padding: 33px 33px;
      height: 200px;
      //background-color: yellow;
    }
    #output1{
      display: none;
      box-sizing: border-box;
      border: 3px solid grey;
      padding: 33px 33px;
      height: 250px;
    }

    /*.fa{
      width: 36px;
      height: 36px;
      //display: inline-block;
      border-radius: 50%;
      color: white;
      padding: 11px 16px;
      background-color: #00a950;
      display: inline-block;
      text-rendering: auto;
    }*/

    #class3{
      margin-bottom: 10px;
    }
    .footer{
      display: none;
      position: fixed;
      left: 0;
      bottom: 0;
      height: 100px;
      width: 100%;
      padding-top: 10px;
      font-size: 20px;
      margin-bottom: 0;
      background-color: green;
      color: white;
      text-align: center;
    }


/*  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}*/



    @media screen and (max-width: 800px) {
    .header{
      width: 100%;
    }

    .column
    {
      height: 600px;
    }

    .left{
      width: 27%; /* The width is 100%, when the viewport is 800px or smaller */
    }

    .right{
      width: 73%;
    }

    .navbar-nav a, .hr{
      margin-left: 0;
      margin-right: 10px;
      padding: 0;
    }

    #left{
      padding-top: 70px
    }

    #right{
      padding-top: 90px;
      padding-left: 0;
      padding-right: 15px;
      text-align: left;
    }
    #bttn, #bttn1, #back, #back1{
      margin-top: 5px;
      margin-left: 5px;
      width: 70px;
      border-radius: 20px;
      font-size: 13px;
    }

    #output{
      height: 340px;
    }

    #output1{
      height: 380px;
    }
  }
  </style>
  </head>
  <body>
    <div id="back_img">
    <div class="header">
      <p style="font-size:60px; font-family: 'freestyle script'">Report
      <a href="homepage.php"><img src="lg.jpeg" height="70px" width="70px" style="margin-bottom: 20px;"></a>&nbsp;Repository</p>
<!--       <p style="font-size:60px; font-family: 'freestyle script'">Report Repository</p>-->
  </div>
  </div>
<div class="row">
  <div class="column left">
  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="showw.php" style="margin-left: 30px;">Profile</a>
      </li>
      <div class="hr"></div>
      <li class="nav-item">
        <a class="nav-link" href="display.php">Medical History</a>
      </li>
      <div class="hr"></div>
      <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload New Documnet</a>
      </li>
      <div class="hr"></div>
      <li class="nav-item">
        <a class="nav-link" href="disease.php">About Diseases</a>
      </li>
      <div class="hr"></div>
      <li class="nav-item">
        <a class="nav-link" href="settings.php" style="margin-left: 22px;">Settings</a>
      </li>
      <div class="hr"></div>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="margin-left: 22px;">Logout</a>
      </li>
    </ul>
  </nav>
</div>


<div class="column right">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#" ><span style="color: #94b8b8;" id="point">Health Calculators:</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav nav nav-pill" role="tablist">
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#home">BMI</a>
      </li>
      <div class="vl"></div>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu1">Pulse Rate</a>
      </li>
      <div class="vl"></div>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu2">Blood Pressure</a>
      </li>
    </ul>
  </div>
</nav>

<div class="tab-content">
    <div id="home" class="container tab-pane"><br>

<div class="row">
  <div class="column left" id="left">
    <div class="col-xs-12 col-sm-12 col-md-12">

      <div id="form">
        <form>
      <div class="form-group">
        <label>Height:</label>
        <input type="number" name="hght"  required placeholder="meters" id="mtr" class="form-control">
      </div>
      <div class="form-group">
        <label>Weight:</label>
        <input type="number" name="kgs"  required class="form-control" id="kg" placeholder="kilogram(s)">
      </div>
      <div class="form-group">
        <input type="button"  onclick="bmi()" id="bttn" value="Calculate">
        <input type="reset" value="Reset" id="bttn">
    </div>
  </form>
</div>

  <div id="output">

    <p id="class1" class="info">
    </p>

    <p id="class2" class="info">
    </p>

    <p id="class3" class="info">
    </p>

    <input type="button" value="Back" onclick="ab()" id="back">
  </div>


  </div>
</div>


<div class="column right" id="right">
  <div class="col-xs-12 col-sm-12 col-md-12">
    Please input your height and weight to<br> know your BMI.Body Mass Index(or BMI)<br>is calculated as
    your weight(in kilograms)<br> divided by the square of your<br> height(in metres) or BMI = Kg/M2.
  </div>
</div>
</div>
</div>

<div id="menu1" class="container tab-pane fade"><br>
  <h3>Menu 2</h3>
  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
</div>

    <div id="menu2" class="container tab-pane fade"><br>
      <div class="row">
        <div class="column left" id="left">
          <div class="col-xs-12 col-sm-12 col-md-12">

            <div id="form1">
              <form>
            <div class="form-group">
              <label>Systolic Pressure:</label>
              <input type="number" name="systolic"  required placeholder="Enter Upper Value" id="systolic" class="form-control">
            </div>
            <div class="form-group">
              <label>Diastolic Pressure:</label>
              <input type="number" name="diastolic"  required class="form-control" id="diastolic" placeholder="Enter bottom Value">
            </div>
            <div class="form-group">
              <input type="button"  onclick="pressure()" id="bttn1" value="Calculate">
              <input type="reset" value="Reset" id="bttn1">
          </div>
        </form>
        </div>
        <div id="output1">

          <p id="class4" class="info">
          </p>

          <p id="class5" class="info">
          </p>

          <p id="class6" class="info">
          </p>


                     <form action="homepage.php">
                               <input type="submit" value="Back" id="back1">
                             </form>
        </div>
        </div>
      </div>



      <div class="column right" id="right">
        <div class="col-xs-12 col-sm-12 col-md-12">
          Please input your Top value and <br> Bottom value to know your Blood <br>Pressure.
        </div>
      </div>
      </div>
    </div>


  </div>
  <script>
  function bmi(){

        document.getElementById("form").style.display="none";
        document.getElementById("output").style.display="block";

        var a,b;
        //var myInput=document.getElementById("bttn");
        a=Number(document.getElementById("mtr").value);
        b=Number(document.getElementById("kg").value);
        var c=a*a;
        var res=(b/c);

        document.getElementById("class1").innerHTML=("Height: "+a+" metres");
        document.getElementById("class2").innerHTML=("Height: "+b+" kilograms");
        if(res<18.5)
        {
          document.getElementById("class3").innerHTML=("Your BMI is "+res.toPrecision(3)+", indicating you are Underweight.");
        }
        else if(res>=18.5 && res<=25)
        {
          document.getElementById("class3").innerHTML=("Your BMI is "+res.toPrecision(3)+", indicating you are Normal.");
        }
        else if(res>25 && res<=30)
        {
          document.getElementById("class3").innerHTML=("Your BMI is "+res.toPrecision(3)+", indicating you are Overweight.");
        }
        else if(res>30)
        {
          document.getElementById("class3").innerHTML=("Your BMI is "+res.toPrecision(3)+", indicating you are Obese.");
        }

      }

      var back=document.getElementById("back");
      function ab(){
        document.getElementById("output").style.display="none";
        document.getElementById("form").style.display="block";
      }


      function pressure(){

        document.getElementById("form1").style.display="none";
        document.getElementById("output1").style.display="block";

        var sys,dia;
        //var myInput=document.getElementById("bttn");
        sys=Number(document.getElementById("systolic").value);
        dia=Number(document.getElementById("diastolic").value);

        document.getElementById("class4").innerHTML=("You have indicated that the Blood Pressure Reading is "+sys+"/"+dia+" mmHg");
        if(sys<90)
        {
          document.getElementById("class5").innerHTML=("Systolic: Low");
        }
        else if(sys>=90 && sys<=120)
        {
          document.getElementById("class5").innerHTML=("Systolic: Normal");
        }
        else if(sys>120 && sys<=140)
        {
          document.getElementById("class5").innerHTML=("Systolic: Little Higher");
        }
        else if(sys>140)
        {
          document.getElementById("class5").innerHTML=("Systolic: High");
        }


        if(dia<60)
        {
          document.getElementById("class6").innerHTML=("Diastolic: Low");
        }
        else if(dia>=60 && dia<=90)
        {
          document.getElementById("class6").innerHTML=("Diastolic: Normal");
        }
        else if(dia>90)
        {
          document.getElementById("class6").innerHTML=("Diastolic: High");
        }



      var back1=document.getElementById("back1");
      function aab(){
        document.getElementById("output1").style.display="none";
        document.getElementById("form1").style.display="block";
      }
  }
  </script>
<?php

  $servername="localhost";
  $username="root";
  $password="";
  $dbname="epics";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
  }

  $key=$_SESSION["email"];


  $disease=$_POST['disease'];
  $type=$_POST['type'];

  $sql="SELECT * FROM photo WHERE Email='$key' AND Disease='$disease' AND Type='$type';";

  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($result))
  {
    echo "<div class='img_container'>";
    echo "<img src='Files/$key/$disease/$type/".$row['image']."' id='img' style='cursor:pointer' onclick='onClick(this)' class='w3-hover-opacity'>";
    echo "<div class='row1'>";
    echo "<div class='column left1' id='left1'>";
    echo "<a href='Files/$key/$disease/$type/".$row['image']."'download><button type='button' class='btn btn-outline-success' style='width:120px; margin-left: 55px; border-radius: 19px;'>Download</button></a>";
    echo "</div>";
    echo "<div class='column right1' id='right1'>";
    echo "<a href='delete.php?op=delete&rowimage=" .$row['image']. "&disease=". $disease. "&type=". $type ."'>";
    echo "<input type='submit' class='btn btn-outline-danger' name='delete' style='width: 120px; margin-left: 15px; border-radius: 19px;' value='Delete'>";
    echo "</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    ?>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright" style="width: 50px;color: white; background: transparent">&times;</span>
  <div class="w3-modal-content w3-animate-zoom" style="margin-top: 0px; padding-top: 0px; width: 600px; height: 400px;">
    <img id="img01" style="width:100%; height:577px;">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>

<?php
  }

 ?>

</div>
  <div class="footer">
  <p>Work in Progress ;)</p>
</div>



</body>
</html>