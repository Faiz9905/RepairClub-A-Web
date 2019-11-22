
<?php
  session_start();

   $_SESSION["temp"]="temp";
  
  if(isset($_POST['verifyone']))
   {
    $otp= $_POST['otp'];
    //if($_COOKIE['otp']==$otp)
    if($_SESSION["otp"]==$otp)
    {
       $servername = "localhost";
$username = "customerdetail";
$password = "Faizan@123";
$dbname = "repairclub";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    //  echo "Test";
     //  if (mobile = $_SESSION)
      $numberr=$_SESSION['mob'];

      $sql = "SELECT * FROM customeridentity WHERE mobile =$numberr";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0)
      {
       
      header('Location: dashboard.php'); 
      }
      else{
  
       $insert = "INSERT INTO customeridentity (mobile)
      VALUES ('$numberr')";
       if (mysqli_query($conn, $insert)) {
      header('Location:dashboard.php');
        } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);

       }
   }

     
    


     
    }
    else
    {
      echo "
       <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
       <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      

      <script>
      alert('OTP did not matched;')
</script>";
    }

   }

   if(isset($_POST['ac_continebtn']))
   {

    $mobilenumber=$_POST['number'];                                             
    $_SESSION["servicedate"] = $_POST['date'];
    $_SESSION["window"] = $_POST['window'];
    $_SESSION["split"] = $_POST['split'];
    $_SESSION["other"] = $_POST['other'];
    $_SESSION["mob"] = $_POST['number'];
     $_SESSION["ac_temp"] = "ac_temp";
    $_SESSION["temp"] = "temp";


    require('otpsystem/textlocal.class.php');

$textlocal = new Textlocal(false, false, 'zLPkmVy8ibM-Xex836WbrsIPPvAK6rOdBjtGoeqmh0');

$numbers = array($mobilenumber);
$sender = 'RECLUB';
$otp = mt_rand(1000,9999);
$message = "Your OTP is ". $otp. ". Please Enter this OTP to Continue. Please DO NOT share this OTP with anyone. RepiarClub.";

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //setcookie('otp',$otp);
    $_SESSION["otp"] = $otp;
   // $_SESSION['mob']= $number;
   // echo "OTP Successfully Send";
} catch (Exception $e) {
    die('Error1: ' . $e->getMessage());
}
     

     header('Location: ac_confirmbooking.php');
   }



     if(isset($_POST['fr_continebtn']))
   {
    
   
    $mobilenumber=$_POST['number'];                                             
    $_SESSION["servicedate"] = $_POST['date'];
    $_SESSION["single"] = $_POST['single'];
    $_SESSION["double"] = $_POST['double'];
    $_SESSION["other"] = $_POST['other'];
    $_SESSION["mob"] = $_POST['number'];
    $_SESSION["fr_temp"] = "fr_temp";
    $_SESSION["temp"] = "temp";


    require('otpsystem/textlocal.class.php');

$textlocal = new Textlocal(false, false, 'zLPkmVy8ibM-Xex836WbrsIPPvAK6rOdBjtGoeqmh0');

$numbers = array($mobilenumber);
$sender = 'TXTLCL';
$otp = mt_rand(1000,9999);
$message = "Your OTP is ". $otp. ". Please Enter this OTP to Continue. Please DO NOT share this OTP with anyone. RepiarClub.";

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //setcookie('otp',$otp);
    $_SESSION["otp"] = $otp;
   // $_SESSION['mob']= $number;
   // echo "OTP Successfully Send";
} catch (Exception $e) {
    die('Error1: ' . $e->getMessage());
}


     header('Location: fr_confirmbooking.php');
   }

   
   
   if(isset($_POST['room_continebtn']))
   {
    
    //$servicedate=$_POST['date'];
   // $geysor=$_POST['geysor'];
   // $roomheater= $_POST['roomheater'];
   // $other = $_POST['other'];
    $mobilenumber=$_POST['number'];
   // $                                              
    $_SESSION["servicedate"] = $_POST['date'];
    $_SESSION["room"] = $_POST['room'];
    $_SESSION["geysor"] = $_POST['geysor'];
    $_SESSION["other"] = $_POST['other'];
    $_SESSION["mob"] = $_POST['number'];
     $_SESSION["room_temp"] = "room_temp";
    $_SESSION["temp"] = "temp";


    require('otpsystem/textlocal.class.php');

$textlocal = new Textlocal(false, false, 'zLPkmVy8ibM-Xex836WbrsIPPvAK6rOdBjtGoeqmh0');

$numbers = array($mobilenumber);
$sender = 'TXTLCL';
$otp = mt_rand(1000,9999);
$message = "Your OTP is ". $otp. ". Please Enter this OTP to Continue. Please DO NOT share this OTP with anyone. RepiarClub.";

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //setcookie('otp',$otp);
    $_SESSION["otp"] = $otp;
   // $_SESSION['mob']= $number;
   // echo "OTP Successfully Send";
} catch (Exception $e) {
    die('Error1: ' . $e->getMessage());
}


     header('Location: room_confirmbooking.php');
   }


   if(isset($_POST['wm_continebtn']))
   {
    
    //$servicedate=$_POST['date'];
   // $geysor=$_POST['geysor'];
   // $roomheater= $_POST['roomheater'];
   // $other = $_POST['other'];
    $mobilenumber=$_POST['number'];
   // $                                              
    $_SESSION["servicedate"] = $_POST['date'];
    $_SESSION["top"] = $_POST['top'];
    $_SESSION["front"] = $_POST['front'];
    $_SESSION["other"] = $_POST['other'];
    $_SESSION["mob"] = $_POST['number'];
      $_SESSION["wm_temp"] = "wm_temp";
    $_SESSION["temp"] = "temp";



    require('otpsystem/textlocal.class.php');

$textlocal = new Textlocal(false, false, 'zLPkmVy8ibM-Xex836WbrsIPPvAK6rOdBjtGoeqmh0');

$numbers = array($mobilenumber);
$sender = 'RECLUB';
$otp = mt_rand(1000,9999);
$message = "Your OTP is ". $otp. ". Please Enter this OTP to Continue. Please DO NOT share this OTP with anyone. RepiarClub.";


try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //setcookie('otp',$otp);
    $_SESSION["otp"] = $otp;
   // $_SESSION['mob']= $number;
   // echo "OTP Successfully Send";
} catch (Exception $e) {
    die('Error1: ' . $e->getMessage());
}


     header('Location: wm_confirmbooking.php');
   }


 
   
  


   
  ?>


  <?php
   
  
    if(isset($_POST['room_continebtn']))
   {
    
    //$servicedate=$_POST['date'];
   // $geysor=$_POST['geysor'];
   // $roomheater= $_POST['roomheater'];
   // $other = $_POST['other'];
    $mobilenumber=$_POST['number'];
   // $                                              
    $_SESSION["servicedate"] = $_POST['date'];
    $_SESSION["geysor"] = $_POST['room'];
    $_SESSION["roomheater"] = $_POST['geysor'];
    $_SESSION["other"] = $_POST['other'];
    $_SESSION["mob"] = $_POST['number'];


    require('otpsystem/textlocal.class.php');

$textlocal = new Textlocal(false, false, 'zLPkmVy8ibM-Xex836WbrsIPPvAK6rOdBjtGoeqmh0');

$numbers = array($mobilenumber);
$sender = 'TXTLCL';
$otp = mt_rand(1000,9999);
$message = "This is your OTP: ". $otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //setcookie('otp',$otp);
    $_SESSION["otp"] = $otp;
   // $_SESSION['mob']= $number;
   // echo "OTP Successfully Send";
} catch (Exception $e) {
    die('Error1: ' . $e->getMessage());
}


     header('Location: confrimbooking.php');
   }


  ?>


  <?php
   
   if(isset($_POST['sendotp']))
  {
    $number=$_POST['number'];
require('textlocal.class.php');

$textlocal = new Textlocal(false, false, 'zLPkmVy8ibM-Xex836WbrsIPPvAK6rOdBjtGoeqmh0');

$numbers = array($number);
$sender = 'TXTLCL';
$otp = mt_rand(1000,9999);
$message = "This is your OTP: ". $otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //setcookie('otp',$otp);
    $_SESSION["otp"] = $otp;
    $_SESSION['mob']= $number;
    $msg= "OTP Successfully Send";
    giveResult();
   
    echo "OTP Successfully Send";

} catch (Exception $e) {
    die('Error1: ' . $e->getMessage());
}
}

   


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   <link rel="stylesheet" href="style/styles.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>-->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 
<!--
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
-->
   
   
   <style media="screen">
  
  .navlink{
  padding-top: 5px; 
  padding-bottom: 5px;
  padding-right: 7px;
  padding-left: 7px;
  font-size: 17px;
}
  
  .col {
    background-image: url("images/backimg44.jpg");
    background-size: cover;
    background-position: center center;
    position: relative;
    height:auto;
    margin-top: -20px;
    width: 100%;
    margin-left: 0px;
   

  
  }
  .main{
    background-color:rgba(0,0,0,0.5);
    width: auto;
    height: auto;
   
    padding-left: 0px;
    padding-right: 0px;

    
   
   

  }
  .custom{
    
  }
  .parallax1{
 background-image: url("images/app.jpeg");
    
    }
    .parallax2{
     background-color: #001718;
      opacity: 2px;
    }
    .paramain{
       background-color:rgba(0,0,0,0.5);
    width: auto;
    height: auto;
    border: 4px solid white;
    padding-left: 0px;
    padding-right: 0px;

    }
     

  .logoimg{
    border-radius: 5%;
    height: 70px;
    width: 70px;

  }
  .modal-title{
    font-size: 27px;
    font-weight: 600;
    letter-spacing: 0.7px;
    padding-top: 5px;
  }
  .no-js #loader { display: none;  }
    }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(images/ani.gif) center no-repeat #fff;
}
  
  </style>
  <title>RepairClub-Best Service Provider in Patna</title>
</head>
<body onload="typeWriter()">


    <div class="modal " id="signupModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center>
            <img style="height: 90px; width: 90px;" src="images/logo.jpg" alt="">
            <h3 style="font-weight: 600; font-size: 25px; letter-spacing: 2px;">RepairClub</h3>
            <p style="font-weight: 550;">The Complete Solution Of Services</p>
          </center>
        </div>
        <div class="modal-body">
         

            <div class="row">
              <div class="col-md-2"></div>
               <div class="col-md-8">
                <form action="page2.php" method="POST" id="myForm">
                  <center >
        <label for="">Enter Your Mobile Number</label>
      </center>
        <br>
        <input type="text" class="form-control" name="number"  maxlength="10" minlength="10" placeholder="Enter Your 10 Digit Mobile Number..." required>
        <br>
        <button class="btn btn-primary btn-block" name="sendotp" id="sub" data-dismiss="modal"  data-toggle="modal" data-target="#loginModal">Continue</button>
        </form>
                 

               </div>
                <div class="col-md-2"></div>
            </div>

        <span id="result"></span>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


      <div class="modal " id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center>
            <img style="height: 90px; width: 90px;" src="images/logo.jpg" alt="">
            <h3 style="font-weight: 600; font-size: 25px; letter-spacing: 2px;">RepairClub</h3>
            <p style="font-weight: 550;">The Complete Solution Of Services</p>
          </center>
        </div>
        <div class="modal-body">
         

            <div class="row">
              <div class="col-md-2"></div>
               <div class="col-md-8">
                <form action="" method="POST" id="myForm">
                  <center >
                    <p>OTP has been Send </p>
                    <p>Not Received? Click <a href="index.php">here</a>  to Refresh and try again.</p>
        <label for="">Enter OTP </label>
      </center>
        <br>
        <input type="text" class="form-control" name="otp"  maxlength="4" minlength="4" placeholder="Enter  4 Digit One Time Password to Continue..." required>
        <br>
        <button class="btn btn-primary btn-block" name="verifyone" id="sub">Login/SignUp</button>
        </form>
                 

               </div>
                <div class="col-md-2"></div>
            </div>

        <span id="result"></span>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--  <div class="se-pre-con"></div>-->
  <!-- Modal Box Container-->
   
   <div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <!--<div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
  -->

    <div class="container">
      <center><h4 style="color: #990000">Book Your Appointment</u></center>
      <label for="uname"><h5>Tell us your date of service.</h5></label>
     <!-- <input type="text" placeholder="Enter Username" name="uname" required>-->
      <select class="form-control"  name="date">
                      <option>Today</option>
                      <option>Tommorrow</option>
                      <option>Day after tomorrow</option>
                     
                 </select>


                <!-- <input class type="date" name="date">-->
                 <br>
      <label for="psw"><h5>Select your requirement</h5></label>
      <div class="row">
        <div class="col-md-4">
     <div class="form-check">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="geysor" value="geysor">Geysor
      </label>
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-check">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="roomheater" value="roomheater">Room Heater
      </label>
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="other" value="other">Other
      </label>
      </div>
      </div>
    </div>
     <br>
      <label for="uname"><h5>Mobile Number.</h5></label>
            <input type="text" placeholder="Enter Your Mobile Number" name="number" required>
    
        
     <button  name="continuebooking" style="background-color: #990000;color: white;">Continue booking</button>
     
    </div>

    
  </form>
</div>

  
  

  <!--Modal Box Container finish-->
  <!--Modal Box container Start-->

<div id="id02" class="modal">
  
  <form class="modal-content animate" method="post">
    <!--<div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
  -->

    <div class="container">
      <center><h4 style="color: #990000">Book Your Appointment</u></center>
      <label for="uname"><h5>Tell us your date of service.</h5></label>
     <!-- <input type="text" placeholder="Enter Username" name="uname" required>-->
      <select class="form-control"  name="date">
                      <option>Today</option>
                      <option>Tommorrow</option>
                      <option>Day after tomorrow</option>
                     
                 </select>


                <!-- <input class type="date" name="date">-->
                 <br>
      <label for="psw"><h5>Select your requirement</h5></label>
      <div class="row">
        <div class="col-md-4">
     <div class="form-check">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="geysor" value="geysor">Window AC
      </label>
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-check">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="roomheater" value="roomheater">Split AC
      </label>
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="other" value="other">Other
      </label>
      </div>
      </div>
    </div>
     <br>
      <label for="uname"><h5>Mobile Number.</h5></label>
            <input type="text" placeholder="Enter Your Mobile Number" name="number" required>
    
        
     <button  name="continuebooking" style="background-color: #990000;color: white;">Continue booking</button>
     
    </div>

    
  </form>
</div>

  <!--Modal box container Finish-->
  <!-- Modal box Container Start-->
    <div class="modal fade" id="ac_booking_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <center> <h4 style="color: #007bff;">Book Your Appointment</h4> </center>
        </div>
        <div class="modal-body">
          <form action="" method="post">

            <label for="">When you need us:-</label>
            <select class="form-control" name="date" id="">
               <option>Today</option>
               <option>Tomorrow</option>
               <option>Day After Tomorrow</option>
            </select>
            <br>
            <label for="">Select Your Requirement</label>
            <br>
               <div class="row">
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;" class="checkbox-inline">
      <input type="checkbox" name="window" value="Windows AC">Windows AC
    </label>
                 </div>
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;" class="checkbox-inline">
      <input style="background-color: red;" type="checkbox" name="split" value="Split AC">Split AC
    </label>
                 </div>
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;"  class="checkbox-inline">
      <input type="checkbox" name="other" value="Other AC">Other AC
    </label>
                 </div>
               </div>
           
    <br>
    <label for="number">Mobile Number</label>
    <input class="form-control" type="text" name="number">
    <br>
    <center>
      <button class="btn btn-primary btn-block" name="ac_continebtn">Continue booking</button>
    </center>
          </form>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>

   
   <div class="modal fade" id="fr_booking_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <center> <h4 style="color: #007bff;">Book Your Appointment</h4> </center>
        </div>
        <div class="modal-body">
          <form action="" method="post">

            <label for="">When you need us:-</label>
            <select class="form-control" name="date" id="">
               <option>Today</option>
               <option>Tomorrow</option>
               <option>Day After Tomorrow</option>
            </select>
            <br>
            <label for="">Select Your Requirement</label>
            <br>
               <div class="row">
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;" class="checkbox-inline">
      <input type="checkbox" name="single" value="Single Door">Single Door
    </label>
                 </div>
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;" class="checkbox-inline">
      <input style="background-color: red;" type="checkbox" name="double" value="Double Door">Double Door
    </label>
                 </div>
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;"  class="checkbox-inline">
      <input type="checkbox" name="other" value="other Refridgerator">Other Refridgerator
    </label>
                 </div>
               </div>
           
    <br>
    <label for="number">Mobile Number</label>
    <input class="form-control" type="text" name="number">
    <br>
    <center>
      <button class="btn btn-primary btn-block" name="fr_continebtn" >Continue booking</button>
    </center>
          </form>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="roomheater_booking_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <center> <h4 style="color: #007bff;">Book Your Appointment</h4> </center>
        </div>
        <div class="modal-body">
          <form action="" method="post">

            <label for="">When you need us:-</label>
            <select class="form-control" name="date" id="">
               <option>Today</option>
               <option>Tomorrow</option>
               <option>Day After Tomorrow</option>
            </select>
            <br>
            <label for="">Select Your Requirement</label>
            <br>
               <div class="row">
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;" class="checkbox-inline">
      <input type="checkbox" name="room" value="Room Heater">Room Heater
    </label>
                 </div>
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;" class="checkbox-inline">
      <input style="background-color: red;" type="checkbox" name="geysor" value="Geysor">Geysor
    </label>
                 </div>
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;"  class="checkbox-inline">
      <input type="checkbox" name="other" value="Other Room/Geysor">Other
                 </div>
               </div>
           
    <br>
    <label for="number">Mobile Number</label>
    <input class="form-control" type="text" name="number">
    <br>
    <center>
      <button class="btn btn-primary btn-block" name="room_continebtn">Continue booking</button>
    </center>
          </form>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="wm_booking_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <center> <h4 style="color: #007bff;">Book Your Appointment</h4> </center>
        </div>
        <div class="modal-body">
          <form action="" method="post">

            <label for="">When you need us:-</label>
            <select class="form-control" name="date" id="">
               <option>Today</option>
               <option>Tomorrow</option>
               <option>Day After Tomorrow</option>
            </select>
            <br>
            <label for="">Select Your Requirement</label>
            <br>
               <div class="row">
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;" class="checkbox-inline">
      <input type="checkbox" name="top" value="Top Loader">Top Loader
    </label>
                 </div>
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;" class="checkbox-inline">
      <input style="background-color: red;" type="checkbox" name="front" value="Front Loader">Front Loader
    </label>
                 </div>
                 <div class="col-md-4">
                    <label style="padding-left: 30px; font-weight: 550;"  class="checkbox-inline">
      <input type="checkbox" name="other" value="Other Washing Machine">Other 
    </label>
                 </div>
               </div>
           
    <br>
    <label for="number">Mobile Number</label>
    <input class="form-control" type="text" name="number" required maxlength="10" minlength="10" placeholder="Enter your 10 digit mobile number here">
    <br>
    <center>
      <button class="btn btn-primary btn-block" name="wm_continebtn" >Continue booking</button>
    </center>
          </form>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>


<!--
  <nav class="navbar navbar-expand-sm bg-light navbar-dark sticky-top ">
  <div class="container-fluid">
    <div class="navbar-header">
      

      <a href="#" class="navbar-brand librand" style="color:black; ">Repair Club</a>
    </div>
   
       <ul class="nav navbar-nav">
      <li class="li"><a  href="#" style="color: black; font-size: 16px; text-decoration: none;">Home</a></li>
      <li class="dropdown li"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: black; font-size: 16px; text-decoration: none;">Services <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li ><a href="#">Page 1-1</a></li>
          <li ><a href="#">Page 1-2</a></li>
          <li ><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li class="li"><a href="#" style="color: black; font-size: 16px; text-decoration: none;">Career</a></li>
      <li  class="li"><a href="#" style="color: black;font-size: 16px; text-decoration: none;">Contact Us</a></li>
      <li  class="li"><a data-target="#mmmModal" data-toggle="mmmodal"  style="color: black;font-size: 16px; text-decoration: none;">Sign Up/Login</a></li>
      

    </ul>
 
  <ul class="nav navbar-nav navbar-right">
      <li><a href="otpsystem/secondo.php" ><span class="glyphicon glyphicon-user"></span> Sign Up/Login</a></li>

    </ul>
    </div>
  </nav>

Modal SignUp
     <div class="mmmodal" id="mmmModal">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="text-center text-primary">Repair Club</h3>
                </div>
              </div>
          </div>

     </div>
  Modal Signup-->

  
   <nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
      <a class="navbar-brand" href="#" style="float: left;margin-top: 7px; color:black; font-size: 19px;font-weight: 600;" > RepairClub</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="navlink"><a href="index.php">Home</a></li>
        <li class="navlink"><a href="aboutus.php">About Us</a></li>
        <li class="navlink"><a href="services.php">Services</a></li>
        <!--<li  class="dropdown navlink">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services</a>
        
          <ul class="dropdown-menu" style="margin-left: 50px;">
            <li class="navlink"><a href="#">Page 1-1</a></li>
            <li class="navlink"><a href="#">Page 1-2</a></li>
            <li class="navlink"><a href="#">Page 1-3</a></li>
          </ul>
        
        </li>
      -->
        
        <li class="navlink"><a href="contactus.php">Contact</a></li>
     
        <li class="navlink" ><a  href="" data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
       
      </ul>
    </div>
  </div>
</nav>

 <div class="modal " id="myModal" >
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content" style="padding: 30px;">
        <div class="modal-header">
          <center> 
          <img class="logoimg" src="images/logo.jpg" alt="" class="w3-round-small">
        </center>
        <center>
          <h4 class="modal-title">RepairClub</h4>
        </center>
        </div>


        <div class="modal-body">
           <form class="form-group" action="" method="post">
               <input style="font-weight: 500;" class="custoninput form-control " name="number" type="text" placeholder="Enter Your 10 Digit mobile number" maxlength="10" minlength="10" required>
               <br>
               <br>
               <button  style="border-radius: 0px; background-color: black;color: white; font-size: 17px; padding: 5px;" name="sendotp" class="btn ">Send OTP</button>
                </form>
               <center><h5 id="message"> </h5></center>
                <form class="form-group" action="" method="post">
                <input style="font-weight: 500;" class="custoninput form-control " name="otp" type="text" placeholder="Enter Your 4 Digit OTP" maxlength="4" minlength="4" required>
               <br>
               <br>
               <button  style="border-radius: 0px; background-color: black;color: white; font-size: 17px; padding: 5px;" name="verifyotp" class="btn ">Verify OTP</button>
           </form>
        </div>
       <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
  </div>

<div class="container-fluid" >
  <div class="col">
  <div class="main">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <div class="div1">
         <div class="enquiry-form">
           <center>
             <p class="penquiry" style="color:white;border-bottom:1.5px solid blue;">ENQUIRY</p>
           </center>
         </div>
         <div class="enquiryform">

             <form action="index.php" method="post">
               <div class="form-group row">
                <div class="col-md-6">
                  <label for="form-name" id="form-label">Name</label>
                  <input type="text" id="form-name" class="form-control" placeholder="Enter Your Full Name" name="name" required>
                  <br>
                  <label for="form-phone" id="form-label">Phone</label>
                  <input type="text" class="form-control" id="form-phone" placeholder="Enter Mobile" name="number" required>
                </div>
                <div class="col-md-6">
                  <label for="form-email" id="form-label">Email Address</label>
                  <input type="text" class="form-control" id="form-email" name="email" placeholder="Enter Email">
                  <br>
                  <label for="form-select-service" id="form-label">Select Service</label>
                  <select class="form-control" id="sel1" name="service">
                      <option>Air Conditioning</option>
                      <option>Geysor</option>
                      <option>Refridgerator</option>
                      <option>Washing Machine</option>
                 </select>

                   
                </div>
                <br><br>
               
                 
               
               

               </div>
                <button class="btn btn-primary enquiry-btn" name="send">CALL ME!!!</button>
             </form>

         </div>
        </div>
      </div>
      <div class="col-md-5 div2">

          <center>
            <h1 class="h1header">HANDYMEN 
            <br> SERVICES</h1>
            <br>
            <p class="pheader">Painting,Home Cleaning,AC Services,Electrician
            <br>
            Plumber,Carpenter & Others
          </p>
            <p class="book">For Booking</p>
          <p id="mob"> </p>



          </center>


          <script>
var i = 0;
var txt = 'Call#: +91-628-7777711/22';
var speed = 100;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("mob").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>


      </div>
      <div class="col-md-1"></div>
      </div>
      </div>
</div>
    </div>

<br>
    <div class="container-fluid secondDiv">
      <div class="row">
     <div class="service">
       <h2 class="h2services"><center>Services</center></h2>
     </div>
</div>
<div class="row">
       <div class="col-md-12">

         <div class="col-md-3 services-col">
           <div class="servicesimage">
             <img src="images/act.jpg" class="image" alt="" style="width:100%;height:100%;">
             <div class="middle">
                 <button class="btn btn-primary" data-toggle="modal" data-target="#ac_booking_modal">Book Now</button>
              </div>
           </div>
           <div class="servicestag">
             <a href="">
               <h3 style="text-decoration: none;" class="servicetagname">Air Conditioning Repairs & Services</h3>
             </a>
             <p class="servicedetails">
               Tired of bad quality and unprofessional laundry service in your…
             </p>


           </div>
         </div>
         <div class="col-md-3 services-col">
           <div class="servicesimage">
                <img src="images/rft.jpg" alt="" class="image" style="width:100%;height:100%;">
                <div class="middle">
             <button class="btn btn-primary" data-toggle="modal" data-target="#fr_booking_modal">Book Now</button>
                    </div>
           </div>
           <div class="servicestag">
             <a href="">
               <h3 class="servicetagname">Refridgerator Repairs & Sevices</h3>
             </a>
             <p class="servicedetails">
               Tired of bad quality and unprofessional laundry service in your…
             </p>


           </div>
         </div>

         <div class="col-md-3 services-col">
           <div class="servicesimage">
              <img src="images/gyt.jpg" alt="" class="image" style="width:100%;height:100%;">
              <div class="middle">
            <button class="btn btn-primary" data-toggle="modal" data-target="#roomheater_booking_modal" >Book Now</button>
                </div>
           </div>
           <div class="servicestag">
             <a href="">
               <h3 class="servicetagname">Geysor & Room Heater Repairs</h3>
             </a>
             <p class="servicedetails">
               Tired of bad quality and unprofessional laundry service in your…
             </p>
              </div>
         </div>
         <div class="col-md-3 services-col">
           <div class="servicesimage">
           <img src="images/wmt.jpg" alt="" class="image" style="width:100%;height:100%;">
           <div class="middle">
            <button class="btn btn-primary" data-toggle="modal" data-target="#wm_booking_modal">Book Now</button>
                </div>

           </div>
           <div class="servicestag">
             <a href="#">
               <h3 class="servicetagname">Washing Machine Repairs & Services</h3>
             </a>
             <p class="servicedetails">
               Tired of bad quality and unprofessional laundry service in your…

             </p>

           </div>
         </div>
       </div>
     </div>
    </div>

<br>
<div class="container-fluid">

  
<div class="row parallax1">

     <div class="container">
       <center>
                <h2 style="margin-top: 100px; letter-spacing: 1px;font-weight: 600;font-size: 25px;color: white;">Download RepairClup Mobile Application</h2>
       <p style="margin-top: 20px;letter-spacing: 0.5px; font-size: 17px;color:white;font-weight: 500;">Choose and book from 10+ services in Patna including Interior Work,Electrical Work,Plumbering etc with our Mobile Application.RepairClub</p>

       <p style="margin-top: 50px;font-size: 17px;color: white;">Send me a play store link on </p>
            
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <form action="" method="POST">
               <input type="text" class="form-control input-lg" name="linknumber" required maxlength="10" minlength="10" placeholder="">
              
             </div>
              <div class="col-md-3"></div>
            </div>
        
             
           
            
           
            <br>
            <button class="btn btn-primary" name="sendlink" style="padding: 10px;margin-top: 30px;margin-bottom: 100px;">Text Link</button>
          </form>
       </center>
     </div>
   

    </div>

</div>

  <!-- <div  class="container">
     <center>
  <h3 class="customerrw">What Our Customers Say's</h3>
</center>
<div class="row divp">


  <div class="col-md-4 pardiv">
    <p class="parareview"><i class="fa fa-quote-left fa-1.5x" style="color:#ff3300;"></i> &nbsp; In vitae tincidunt turpis.'' Proin in euismod dolor.
   Sed eget tellus venenatis,
    molestie lorem tempus, viverra ante vulputate.</p>
<div class="row">
    <div class="col-md-5 c-img">
      <img src="images/std1.png" class="responsive" alt="Student 1" style="width:100%;height:100%;border-radius:50%;">
    </div>
    <div class="col-md-7 c-name">
      <h4 class="stdrw">Student3</h4>
      <h5 class"stdps">Position</h5>
    </div>
</div>

  </div>
  <div class="col-md-4 pardiv">
    <p class="parareview"><i class="fa fa-quote-left fa-1.5x" style="color:#ff3300;"></i> &nbsp; In vitae tincidunt turpis.'' Proin in euismod dolor.
    Sed eget tellus venenatis,
    molestie lorem tempus, viverra ante vulputate.</p>
    <div class="row">
    <div class="col-md-5 c-img">
      <img src="images/std1.png" class="responsive" alt="Student 1" style="width:100%;height:100%;border-radius:50%;">
    </div>
    <div class="col-md-7 c-name">
      <h4 class="stdrw">Student3</h4>
      <h5 class"stdps" >Position</h5>
    </div>
    </div>
  </div>
  <div class="col-md-4 pardiv">
    <p class="parareview"><i class="fa fa-quote-left fa-1.5x" style="color:#ff3300;"></i> &nbsp; In vitae tincidunt turpis.'' Proin in euismod dolor.
    Sed eget tellus venenatis,
    molestie lorem tempus, viverra ante vulputate.</p>
    <div class="row">
    <div class="col-md-5 c-img">
      <img src="images/std1.png" class="responsive" alt="Student 1" style="width:100%;height:100%;border-radius:50%;">
    </div>
    <div class="col-md-7 c-name">
      <h4 class="stdrw">Student3</h4>
      <h5 class"stdps">Position</h5>
    </div>
    </div>
  </div>

  </div>
</div>-->

<div class="container cust">
     <center><h3 style="font-weight: bold; margin-top: 60px;">What Our Customer Says about Us</h3>
      <p style="font-size: 16px; color: #737373 margin-top10px;">Join a community of 75,000+ professionals who have successfully grown their business with UrbanClap</p></center>

       <div class="row">
         <div class="col-md-4 ">
           <div class="custdiv">
             <center>
               <img src="images/cust.png" alt="" style="margin-top: 14px;" class="responsive">
               <p style="color: black; font-size: 18px; font-weight: bold;margin-top: 10px;">Faizan khan</p>
               <p style="color: #737373; font-size: 17px; letter-spacing: 1px;">Software Engineer</p>
               <br>
               <p style="color: #737373; font-size: 16px;padding-right: 10px;padding-left: 10px;margin-bottom: 25px; font-family:courier4">From earning 10K a month to being totally booked from November till February -- My UrbanClap Journey.</p>
             </center>

           </div>
         </div>
         <div class="col-md-4 ">
            <div class="custdiv">
               <center>
               <img src="images/cust.png" alt="" style="margin-top: 14px;" class="responsive">
               <p style="color: black; font-size: 18px; font-weight: bold;margin-top: 10px;">Faizan khan</p>
               <p style="color: #737373; font-size: 17px; letter-spacing: 1px;">Software Engineer</p>
               <br>
               <p style="color: #737373; font-size: 16px;padding-right: 10px;padding-left: 10px;margin-bottom: 25px; font-family:courier4">From earning 10K a month to being totally booked from November till February -- My UrbanClap Journey.</p>
             </center>
            </div>
         </div>
         <div class="col-md-4 ">
            <div class="custdiv">
               <center>
                
               <img src="images/cust.png" alt="" style="margin-top: 14px; border-radius: 50%" class="responsive">
               <p style="color: black; font-size: 18px; font-weight: bold;margin-top: 10px;">Faizan khan</p>
               <p style="color: #737373; font-size: 17px; letter-spacing: 1px;">Software Engineer</p>
               <br>
               <p style="color: #737373; font-size: 16px;padding-right: 10px;padding-left: 10px;margin-bottom: 25px; font-family:courier4">From earning 10K a month to being totally booked from November till February -- My UrbanClap Journey.</p>
             </center>
            </div>
         </div>
       </div>

</div>
<div class="row parallax2">
  <div class="container">
    <div class="row">
      <div class="col-md-4 parcol">
          
       <center><i style="font-size: 90px;color: white; padding-top: 90px;" class="fa fa-heart"></i>
       <br>
       <p style="font-size: 25px;font-weight: bold;color:white;">550+</p>
       <p style="font-size: 20px;color: white;line-height: 1px; padding-bottom: 90px;">Positive Feedback</p>
       
      
       </center>

      </div>
      <div class="col-md-4 parcol">
        
        <center><i style="font-size: 90px;color: white; padding-top: 90px;" class="fa fa-user"></i>
       <br>
       <p style="font-size: 25px;font-weight: bold;color:white;">120+</p>
       <p style="font-size: 20px;color: white;line-height: 1px; padding-bottom: 90px;">Regular Client</p>
       
      
       </center>
      </div>
      <div class="col-md-4 parcol">
          <center><i style="font-size: 90px;color: white; padding-top: 90px;" class="fa fa-briefcase"></i>
       <br>
       <p style="font-size: 25px;font-weight: bold;color:white;">15+</p>
       <p style="font-size: 20px;color: white;line-height: 1px; padding-bottom: 90px;">Quality Worker</p>
       
      
       </center>

      </div>
    </div>
  </div>
</div>
</div>


 <div class="footer footercontainer">
    <br><br>
    <div class="container ">
      <div class="row">
        <div class="col-md-4 customfootercol">
          <h2 class="number"><i class="fa fa-phone-square" aria-hidden="true">+91-6287777711/22</i></h2>

          <br>
          <strong><h5 style="color: silver;font-size: 16px;">REPAIR CLUB:-</h5></strong>
          <strong><h5 style="color: silver; font-size: 16px;">Now Serving in Patna & Muzaffarpur  -</h5></strong>
          <p class="paradetails">RepairClub is a Firm which providing services in several divisions like Repairing, Plumber, and electrician. We have best Technician & Man Power for giving you best services in ever. 
We provide free visit facility in your home, office, shop etc. before start the service as per your need.
</p>
            <br>
            
            <a href=""> <i style="font-size: 40px;" class="fa fa-facebook-square customicon"></i></a>
            &nbsp;&nbsp;&nbsp;
            
            <a href=""><i style="font-size: 40px;" class="fa fa-twitter-square customicon"></i></a>
             
        </div>


        <div class="col-md-2 customfootercol">

          <h5 class="imp">Importants Links</h5>
          <br>
          <a href="index.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Home</i></h5></a>
          <a href="aboutus.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Know About Us</i></h5></a>
          <a href="services.php"> <h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;List Of Services</i></h5></a>
          <a href="services.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Pricing</i></h5></a>
          <a href="#" data-toggle="modal" data-target="#id_careerModal"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Career</i></h5></a>
          <a href="contactus.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Contact Us</i></h5></a>

          <br>
          <h5 class="imp">Terms & Conditions</h5>
           <a href="termandcondition.php"><h5 class="imp_link1"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Terms & Policy</i></h5></a>
           <a href="fnq.php"><h5 class="imp_link1"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;FAQS</i></h5></a>
        </div>



        <div class="col-md-2 customfootercol">
          <h5 class="imp">Popular Services</h5> <br>
        <a href="services.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Electrician</i></h5></a>
        <a href="services.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Plumber</i></h5></a>
        <a href="services.php"> <h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Geysor Technician</i></h5></a>
        <a href="services.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;AC Services</i></h5></a>

        <br><br>
        <br><br>

        <h5 class="imp">Media</h5>
         <a href="#"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Offers</i></h5></a>
         <a href="#"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Blog</i></h5></a>
        </div>
        <div class="col-md-4 customfootercol">
          <h5 class="imp">Office Address</h5>

          </address>:-</h5>
        <h5 class="imp_link"><i class="fa fa-hand-o-right" aria-hidden="true">&nbsp; 301, Yashvardhan Apartment, Shiv Puri, Boring Road,Patna-800001</i></h5>
        <br>

        <h5 class="imp">Workplace :-</h5>
        <h5 class="imp_link"><i class="fa fa-hand-o-right" aria-hidden="true">&nbsp;  301, Yashvardhan Apartment, Shiv Puri, Boring Road,Patna-800001</i></h5>
        <br>
        <h5 class="imp">Phone Numbers :-</h5>
        <h5 class="imp_link"><i class="fa fa-phone-square" aria-hidden="true">&nbsp; +91-628-7777711, +91-628-7777722</i></h5>

        <br>
        <h5 class="imp">Emails :-</h5>
        <h5 class="imp_link"><i class="fa fa-envelope" aria-hidden="true">&nbsp; repairclub.pat@gmail.com,complain.rcpat@gmail.com</i></h5>
        </div>
      </div>
    </div>
    <br><br><br><br>
    
  </div>

  <div class="footer2">
    <div class="container">
      <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <p class="lastpara">Copyright © All Rights Reserved. RepairClub | Website developed by khanfaizan.com</p>
      </div>
      <div class="col-md-2"></div>
      </div>
    </div>
  </div>
        


    <div class="modal fade" id="id_careerModal" role="dialog">
    <div class="modal-dialog" style="padding: 20px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><img class="logoimg" src="images/logo.jpg" alt="">
          <h5 class="modal-title">RepairClub</h5>
          </center>
        </div>
        <div class="modal-body">
          <p style="font-size: 19px; font-weight: 500;">Sorry, Right now We don't have any position in RepairClub</p>
          <br>
          <center >
          <i class="fa fa-meh-o" style="font-size: 110px;" aria-hidden="true"></i>
          
          <br>
          <br>
           <p style="font-size: 19px; font-weight: 500;">Please visit again to get upadate regarding vacancy</p>
           </center>
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
  

  <script>
    $("#sub").click( function() {
 $.post( $("#myForm").attr("action"), 
         $("#myForm :input").serializeArray(), 
         function(info){ $("#result").html(info); 
  });
});

    $("#myForm").submit( function() {
  return false; 
});


  </script>

<script>


//Modal Bos JS
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });</script>
</body>

</html>
<?php

    


   if(isset($_POST['send']))

   {
 
      $name=$_POST['name'];
      $email= $_POST['email'];
      $number = $_POST['number'];
      $service= $_POST['service'];
      

      $servername = "localhost";
$username = "customerdetail";
$password = "Faizan@123";
$dbname = "repairclub";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  $sql = "INSERT INTO enquiry (name, email, phonenumber, service)
VALUES ('$name', '$email', '$number', '$service')";
   

   if (mysqli_query($conn, $sql)) {
     echo "<script>swal('Thank You!', 'Your form has been Submitted!', 'success');</script>";
} else {
   
      echo "<script>
swal ( 'Oops' ,  'Something went wrong!' ,  'error' )
</script>";


  }
}





  if(isset($_POST['sendlink']))
  {
   
    $number=$_POST['linknumber'];
require('textlocal.class.php');

$textlocal = new Textlocal(false, false, 'zLPkmVy8ibM-Xex836WbrsIPPvAK6rOdBjtGoeqmh0');

$numbers = array($number);
$sender = 'RECLUB';


$message= "Dear User.
Very Soon we will be on Play Store to serve you better.
Thank you for showing interest in RepairClub.
For any query call on 6287777711 or 6287777722.
Thank you";

//Your OTP is %%|SampleOTP^{"inputtype" : "text", "maxlength" : "4"}%%. Please Enter this OTP to Continue. Please DO NOT share this OTP with anyone. RepiarClub.

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //setcookie('otp',$otp);
  
    echo "<script>

    swal('Thank You!', 'Link has been send!', 'success');
    </script>";
} catch (Exception $e) {
    //die('Error: ' . $e->getMessage() );
      echo "<script>
swal ( 'Oops' ,  'Something went wrong!' ,  'error' )
</script>";
    //
}
}



?>

