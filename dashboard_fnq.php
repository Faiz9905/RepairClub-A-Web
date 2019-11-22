 <?php
  session_start();
  if($_SESSION["mob"]=="")
   {
     header('Location:index.php');
   }

  if(isset($_POST['logout']))
     {
      session_destroy();
       header('Location: index.php');
     }

     if(isset($_POST['edit']))
     {
      header('Location:editProfile.php');
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
   <link rel="stylesheet" href="style/styles.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>RepairClub</title>
	<style>
		.navlink{
  padding-top: 5px; 
  padding-bottom: 5px;
  padding-right: 7px;
  padding-left: 7px;
  font-size: 17px;
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
        <li class="navlink"><a href="contactus.php">Contact</a></li>
     
        <li><a class="dropdown-toggle navlink" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION[
  "mob"]?></a>
     
            
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

  <div class="container">
  	<h2 style="font-weight: 500;">Frequently Asked Questions</h2>
		<hr>

		<p style="font-size: 19px; font-weight: 500">Que: When I booked a service in you apps what charges i have to pay?</p>
		<p style="font-size: 16px;">Ans: Respected Customer our representative visit in your place that would be free visit.*</p>
		<br>
		<p style="font-size: 19px; font-weight: 500">Que: How would I know your charges against any services? 
</p>
		<p style="font-size: 16px;">Ans: -: Respected Customer first of all when our Representative visit your place , they will know your need what you have to repair or anything services , after that they will tell you about charges. *
</p>
<br>
<p style="font-size: 19px; font-weight: 500">Que: How Would I Pay your Charges?
</p>
		<p style="font-size: 16px;">Ans: Respected Customer you Can Pay Our Service Charges by Cash, Credit / Debit Card, Pay tm, and Net Banking.*</p>
		<br>
		<p style="font-size: 19px; font-weight: 500">Que: Is there any membership or not? 
</p>
		<p style="font-size: 16px;">Ans: Yes Our Respected Customer, membership is available in our apps, You Can use our Apps by Register yourself in our Apps through Login and we will provide you a permanent membership to get you best offer and know your booking services track.*</p>
		<br>

		<p style="font-size: 19px; font-weight: 500">Que: If your Representative Provide Services to me and after 2 or 3 Days I found that I am facing same problems which was before service, in that condition what will you do?
</p>
		<p style="font-size: 16px;">Ans: Respected Customer, Our Moto is working with minimum tolerance to provide you these services as much as we can. You can complain regarding your services in this email Id, <b> (complain.rcpat@gmail.com)</b>.  Beyond this we will make you a call or massage to know your satisfaction and feedback, if you are not satisfied with our services then our representative will visit your place and provide you service free of cost  within 15 days.*
</p>
		<br>
       
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