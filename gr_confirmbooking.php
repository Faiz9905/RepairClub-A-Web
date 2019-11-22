   <?php
  session_start();
    
  if($_SESSION["otp"]=="")
  {
    header('Location: index.php');
  }

  if(isset($_POST['cnfrmbtn']))
  {
  $otp=    $_SESSION["otp"];  
  $date=   $_SESSION["servicedate"];
  $window= $_SESSION["window"];
  $split=  $_SESSION["split"];
  $other=  $_SESSION["other"];
  $number= $_SESSION["mob"];
  $name  = $_POST['name'];
  $add  = $_POST['add'];
  $landmark  = $_POST['landmark'];
  $city  = $_POST['city'];
  $msg   = $_POST['msg'];
  $cnotp  = $_POST['cnotp'];

  if($cnotp==$otp)
  {
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
  
  $sql = "INSERT INTO bookingdetails (nameofcust, address, nearby, city, day, require1, require2, require3, Additional, mobilenumber)
  VALUES ( '$name', '$add', '$landmark', '$city', '$date', '$window','$split', '$other', '$msg', '$number')";
      

   if (mysqli_query($conn, $sql)) {
       echo "<script>swal('Good job!', 'You clicked the button!', 'success');</script>";
     //  header('Location: http://localhost/MasterProject/index.php');
       session_destroy();

        require('otpsystem/textlocal.class.php');

$textlocal = new Textlocal(false, false, 'zLPkmVy8ibM-Xex836WbrsIPPvAK6rOdBjtGoeqmh0');

$numbers = array($number);
$sender = 'TXTLCL';
//$otp = mt_rand(1000,9999);
$message = "Your Booking has been Confirmed!";



try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //setcookie('otp',$otp);
    $_SESSION["otp"] = $otp;
   // $_SESSION['mob']= $number;
   // echo "OTP Successfully Send";
} catch (Exception $e) {
    die('Error1: ' . $e->getMessage());
}
    
        } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
   

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
     
        <li class="navlink" ><a  href="secondo.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
       
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
             </form>
             </div>
          </div>
     </div>
   <br><br><br><br>

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
</html>
