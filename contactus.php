<?php
session_start();



if(isset($_POST['logout']))
     {
      session_destroy();
       header('Location:index.php');
     }

     if(isset($_POST['edit']))
     {
      header('Location:editProfile.php');
     }
   if(isset($_POST['send']))

   {
 
      $name=$_POST['name'];
      $email= $_POST['email'];
      $number = $_POST['number'];
      $service= $_POST['service'];
      $message= $_POST['message'];

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

  $sql = "INSERT INTO enquiry (name, email, phonenumber, service, message)
VALUES ('$name', '$email', '$number', '$service', '$message')";
   

   if (mysqli_query($conn, $sql)) {
     echo "<script type='text/javascript'>
    alert('Your Form has been successfully Submitted !');
   
    </script>";
} else {
   
      echo "<script type='text/javascript'>
    alert('Form has been not Submitted');
   
    </script>";


  }
}





?>

 <?php

if(isset($_POST['verifyone']))
   {
    $otp= $_POST['otp'];
    //if($_COOKIE['otp']==$otp)
    if($_SESSION["otp"]==$otp)
    {
         /*DataBase Connection  creating table of ustomer by using their mobile number */
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
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style/styles.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>RepairClub-Contact Us</title>

  <style>
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
  .navlink{
  padding-top: 5px; 
  padding-bottom: 5px;
  padding-right: 7px;
  padding-left: 7px;
  font-size: 17px;
}
  </style>
</head>
<body>
   
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

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="margin-top: 7px; color:black; font-size: 19px;font-weight: 600;" >RepairClub</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="navlink"><a href="dashboard.php">Home</a></li>
        <li class="navlink"><a href="dashboard_aboutus.php">About Us</a></li>
        <li class="navlink"><a href="dashboard_services.php">Services</a></li>
        <li class="navlink"><a href="dashboard_contactus.php">Contact</a></li>
     
        <li><a class="dropdown-toggle navlink" data-toggle="modal" data-target="#signupModal" href="#" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     
            
        <ul class="dropdown-menu">
          <form method="POST">
          <li><button class="btn" href="#" name="edit">Edit Profle</button></li>
          <li><button class="btn" name="logout" href="#">Logout</button></li>
        </form>
        
          
        </ul>
      </li>
       
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
      <h2 style="font-weight: 600; ">Contact Us</h2>
      <hr>
    </div>
  <div class="container customcontainercontactus">
      <div class="row">
        <div class="col-md-6 conatct1">
          <p class="pconact">For any query, contact us</p>
         <br>
          <form  method="POST">
            <div class="form-group row">
               <div class="col-md-6">
                 <label for="form-name" style="color:#007bff;">Name</label>
                 <input type="text" id="form-name" class="form-control msg" placeholder="Enter Your Full Name" name="name" required>
                 <br>
                 <label for="form-phone" style="color:#007bff;">Phone</label>
                 <input type="text" class="form-control msg" id="form-phone" placeholder="Enter Mobile" name="number" required>
               </div>
               <div class="col-md-6">
                 <label for="form-email" style="color:#007bff;">Email Address</label>
                 <input type="text" class="form-control msg" id="form-email" placeholder="Enter Email" name="email">
                 <br>
                 <label for="form-select-service" style="color:#007bff;">Select Service</label>
                 <select class="form-control msg" id="sel1" name="service">
                     <option>Air Conditioning</option>
                      <option>Geysor</option>
                      <option>Refridgerator</option>
                      <option>Washing Machine</option>
                </select>
               </div>
               <br>
               <div class="col-md-12 form-group">
                 <br>
                
                 <br>
                 <label for="" style="color:#007bff;">Message</label>
                  <textarea class="form-control msg" rows="4" id="comment " placeholder="Message*" name="message"></textarea>
               </div>
                <button  name="send" class="btn btn-primary btncustom">Send Query</button>
            </div>


          </form>
        </div>
        <div class="col-md-6 conact2">

          <h5 class="add">
            Office Address:-
          </h5>
          <p class="addp">
             301, Yashvardhan Apartment, Shiv Puri, Boring Road,Patna-800001
          </p>
          <h5 class="addph">
            For Booking/To Know the satus of Booking:-
          </h5>

            <p class="numberph1"><b>Phone:</b> +91-628-7777711 </p>
            <p class="numberph2"><b>Phone:</b> +91-628-7777722 </p>


          <h5 class="addph">
            For Jobs/Career:-
          </h5>

            <p class="numberph1"><b>Phone:</b> +91-628-7777711 </p>
            <p class="numberph2"><b>Phone:</b> +91-628-7777722 </p>


          <h5 class="addph">
            Send us message or Logon on:-
          </h5>

            <p class="numberph1"><b>Email:</b>    repairclub.pat@gmail.com </p>
            <p class="numberph2"><b>website:</b>  <a href="repairclub.in">www.repair.in</a> </p>


        </div>
        <br><br><br>
      </div>
  </div>
  <br><br>
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

</body>
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
</html>
