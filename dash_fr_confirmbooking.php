   <?php
  session_start();
   
  if( $_SESSION["fr_temp"]=="")
  {
    header('Location:dashboard.php');
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

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <title>Confirm Booking</title>

  <style>
    .navlink{
  padding-top: 5px; 
  padding-bottom: 5px;
  padding-right: 7px;
  padding-left: 7px;
  font-size: 17px;
}
.custom{
  
  
  height: auto;
}

  </style>

</head>

<body>
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
     
        <li class="navlink" ><a  href=""><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION[
  "mob"]?></a></li>
       
      </ul>
    </div>
  </div>
</nav>
       <center><h3>Confirm Booking</h3></center>
       <hr style="background-color: #007bff">
     <div class="container">
          <div class="row">
            <div class="col-md-6 custom">
             <form action="" method="post">
               <label for="">Name*:</label>
               <input type="text" class="form-control" name="name" required>
               <br>
                <label for="">Address*:</label>
               <input type="text" class="form-control" name="add" required>
               <br>
               <div class="row">
                 <div class="col-md-6">
                   <label for="">Landmark</label>
               <input type="text" class="form-control" name="landmark">
                 </div>
                 <div class="col-md-6">
                   <label for="">City</label>
               <input type="text" class="form-control" value="Patna" name="city">
                 </div>
               </div>
                <br>
                <label for="">Any Other Instruction</label>
              <textarea  class="form-control"  id="" cols="30" rows="5" name="msg"></textarea>
              <br>
              <label for="">OTP*</label>
              <input type="text" class="form-control" required name="cnotp">
<br>
              <button class="btn btn-primary btn-block" name="cnfrmbtn">Confirm Booking</button>
               <br>
              <label for="" style="font-family: italic;">By clicking Confirm Booking you agree to the <a href="dash_term.php">Terms and Conditions.</a> of RepairClub</label>
             </form>
             </div>
          </div>
     </div>
   <br><br><br><br>
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
          <a href="dashboard.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Home</i></h5></a>
          <a href="dashboard_aboutus.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Know About Us</i></h5></a>
          <a href="dashboard_services.php"> <h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;List Of Services</i></h5></a>
          <a href="services.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Pricing</i></h5></a>
          <a href="#" data-toggle="modal" data-target="#id_careerModal"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Career</i></h5></a>
          <a href="dashboard_contactus.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Contact Us</i></h5></a>

          <br>
          <h5 class="imp">Terms & Conditions</h5>
           <a href="dashboard_term.php"><h5 class="imp_link1"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Terms & Policy</i></h5></a>
           <a href="dashboard_fnq.php"><h5 class="imp_link1"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;FAQS</i></h5></a>
        </div>



        <div class="col-md-2 customfootercol">
          <h5 class="imp">Popular Services</h5> <br>
        <a href="dashboard_services.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Electrician</i></h5></a>
        <a href="dashboard_services.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Plumber</i></h5></a>
        <a href="dashboard_services.php"> <h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;Geysor Technician</i></h5></a>
        <a href="dashboard_services.php"><h5 class="imp_link"><i class="fa fa-angle-double-right" aria-hidden="true">&nbsp;AC Services</i></h5></a>

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
        <p class="lastpara">Copyright © All Rights Reserved. Repair Mart | Website developed by khanfaizan.com</p>
      </div>
      <div class="col-md-2"></div>
      </div>
    </div>
  </div>

</body>
</html>
<?php
if(isset($_POST['cnfrmbtn']))
  {
  $otp=    $_SESSION["otp"];  
  $date=   $_SESSION["servicedate"];
  $single= $_SESSION["single"];
  $double=  $_SESSION["double"];
  $other=  $_SESSION["other"];
  $number= $_SESSION["mob"];
  $name  = $_POST['name'];
  $add  = $_POST['add'];
  $landmark  = $_POST['landmark'];
  $city  = $_POST['city'];
  $msg   = $_POST['msg'];
  $cnotp  = $_POST['cnotp'];

  if($cnotp==$otp)
  { $servername = "localhost";
$username = "customerdetail";
$password = "Faizan@123";
$dbname = "repairclub";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
  $sql = "INSERT INTO bookingdetails (nameofcust, address, nearby, city, day, require1, require2, require3, Additional, mobilenumber)
  VALUES ( '$name', '$add', '$landmark', '$city', '$date', '$single','$double', '$other', '$msg', '$number')";
      

   if (mysqli_query($conn, $sql)) {
      
      

       
       

        require('otpsystem/textlocal.class.php');

$textlocal = new Textlocal(false, false, 'zLPkmVy8ibM-Xex836WbrsIPPvAK6rOdBjtGoeqmh0');

$numbers = array($number);
$sender = 'RECLUB';
//$otp = mt_rand(1000,9999);
$message =  "Your booking has been confirmed.
Call us on 6287777711,6287777722 for any query.
RepiarClub";



try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //setcookie('otp',$otp);
    $_SESSION["otp"] = $otp;
   // $_SESSION['mob']= $number;
   // echo "OTP Successfully Send";
      unset( $_SESSION["fr_temp"]);
     echo "<script>alert('Congratulation ! Your Booking Has Been Done!');
           window.location = 'dashboard.php';  
     </script>";
     
      

} catch (Exception $e) {
    die('Error1: ' . $e->getMessage());
}
    
        } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
   

   }
   else
   {
     echo "<script>
swal ( 'Oops' ,  'Something went wrong!' ,  'error' )
</script>";
 
   }
   
 }
  


?>