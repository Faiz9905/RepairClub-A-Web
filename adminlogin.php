<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   <link rel="stylesheet" href="style/styles.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  	.col2{
  		margin-top:160px;
  		width: 100%
  		height: 100%;
  		border: 1px solid red ;
  		background-color: #f2f2f2 ; 
  		box-shadow: 10px 10px 5px grey;
  	}
  	.col1{
  		margin-top:160px;
  		width: 400px;
  		height: 400px;
  		
  	}
  	.col3{
  		margin-top:160px;
  		width: 300px;
  		height: 400px;
  		
  	}
  	.adminheader{
  		margin-top: 30px;
  		font-weight: 600;
  	}
  </style>
</head>
<body>
  <div class="container-fluid">
  	   <div class="row">
  	   	   <div class="col-md-4 col1"></div>
  	   	   <div class="col-md-4 col2">
  	   	   	  <center><h4 class="adminheader">Admin Login</h4></center>
  	   	   	     <form action="" method="post">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
   
    <button style="margin-bottom:  20px;" name="submit" class="btn btn-success btn-block">Submit</button>
  </form>
              
  	   	   </div>
  	   	   <div class="col-md-4 col3"></div>
  	   </div>

  </div>	    

  
</body>
</html>

<?php
session_start();
  
  $_SESSION["active"]="active";
  if(isset($_POST['submit']))
  {
    $user=$_POST['username'];
    $pwd=$_POST['pwd'];
    if($user=="admin" && $pwd=="password")
    {
       header('Location:complaindata.php');
    }
    else{
      echo "<script>
       alert('Wrong Credential');
      </script>";
     
    }
  }
?>