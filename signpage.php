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
   <script src="myjavascript.js"></script>

 <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>-->

   <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>RepairClub<-LoginPage</title>

		<style>
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
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Model Box</button>

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        	<form action="page2.php" method="POST" id="myForm">
        <label for="">Enter Number</label>
        <br>
        <input type="text" class="form-control" name="number">
        <br>
        <button class="btn btn-primary" name="sendotp" id="sub" data-dismiss="modal" data-toggle="modal" data-target="#myModal1">Send</button>
        </form>
        <span id="result"></span>
        <br>
        <label for="">Enter OTP</label>
        <br>
        <input type="text" class="form-control" name="otp">
        <br>
        <button class="btn btn-primary" name="submitotp">Submit</button>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        	<p>OtP Send successfully</p>
        	<form action="page2.php" method="POST" id="myForm">
        <label for="">Enter Number</label>
        <br>
        <input type="text" class="form-control" name="number">
        <br>
        <button class="btn btn-primary" name="sendotp" id="sub" data-dismiss="modal" data-toggle="" data-target="">Send</button>
        </form>
        <span id="result"></span>
        <br>
        <label for="">Enter OTP</label>
        <br>
        <input type="text" class="form-control" name="otp">
        <br>
        <button class="btn btn-primary" name="submitotp">Submit</button>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!-- <script>
  	$("#sub").click( function() {
    

   var data= $("#myForm: input").serializeArray();
   $.post($("#myForm").attr("action"),data, function(info){$("#result").html(info);});
	

	});

$("#myForm").submit(function(){

	return false;
});
  </script>-->

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
</body>
</html>