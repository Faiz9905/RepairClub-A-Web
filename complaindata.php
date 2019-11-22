<?php
session_start();
    if( $_SESSION["active"]=="")
{
  header('Location: http://localhost/MasterProject/adminlogin.php');
}


if(isset($_POST['Logout']))
{
   session_destroy();
   header('Location: http://localhost/MasterProject/adminlogin.php');
}
$servername = "localhost";
$username = "customerdetail";
$password = "Faizan@123";
$dbname = "repairclub";

       $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  $sql = "SELECT * FROM bookingdetails";
$result = mysqli_query($conn, $sql);



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
	<title>RepairClub</title>
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
        <li class="navlink"><a href="enquirydata.php">Enquiry Data</a></li>
        <li class="navlink"><a href="services.php">Complain </a></li>
        <!--<li  class="dropdown navlink">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services</a>
        
          <ul class="dropdown-menu" style="margin-left: 50px;">
            <li class="navlink"><a href="#">Page 1-1</a></li>
            <li class="navlink"><a href="#">Page 1-2</a></li>
            <li class="navlink"><a href="#">Page 1-3</a></li>
          </ul>
        
        </li>
      -->
        
        <li class="navlink"><a href="contactus.php">Customer Details</a></li>
     
        <li class="navlink" ><a data-toggle="modal" data-target="#myModal" href="#"><span class="glyphicon glyphicon-user"></span> New Booking</a></li>
        
      </ul>
    </div>
  </div>
</nav>
   


    <div class="container">
  <h2>Complain Datas</h2>
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>BOOKING_ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Locality</th>
        <th>City</th>
        <th>Day</th>
        <th>Need_1</th>
        <th>Need_2</th>
        <th>Need_3</th>
        <th>Instruction</th>
         <th>Contact</th>

      </tr>
    </thead>
    <?php

        while($rows = mysqli_fetch_assoc($result))
         {
    ?>
    <tbody>
      <tr>
        <td><?php echo $rows["bookingid"]; ?></td>
         <td><?php echo $rows['nameofcust']; ?></td>
          <td><?php echo $rows['address']; ?></td>
          <td><?php echo $rows['nearby']; ?></td>
           <td><?php echo $rows['city']; ?></td>
            <td><?php echo $rows['day']; ?></td>
             <td><?php echo $rows['require1']; ?></td>
             <td><?php echo $rows['require2']; ?></td>
             <td><?php echo $rows['require3']; ?></td>
             <td><?php echo $rows['Additional']; ?></td>
             <td><?php echo $rows['mobilenumber']; ?></td>
       
      </tr>
      <?php
        }
      ?>
     
    </tbody>
  </table>
</div>
<center>
<form action="" method="POST">
      <button class="btn btn-danger" name="Logout">Logout</button>
        </form>
      </center>
</body>
</html>