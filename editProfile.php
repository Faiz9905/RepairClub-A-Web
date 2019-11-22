<?php

   ob_start();
   session_start();


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
  <style media="screen">
  
 .navlink{
  padding-top: 5px; 
  padding-bottom: 5px;
  padding-right: 7px;
  padding-left: 7px;
  font-size: 17px;
}
.profile_col{
  
  background-color: #f4f6f7;
  height: auto; 
}
.profile_col1{
  
  background-color: white;
  height: auto; 
}
.custom{
  padding-top: 50px;
  padding-bottom: 50px;
}

  </style>
  <title>My Profile </title>
</head>
<body style="background-color: #f4f6f7;">
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
        <!--<li  class="dropdown navlink">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services</a>
        
          <ul class="dropdown-menu" style="margin-left: 50px;">
            <li class="navlink"><a href="#">Page 1-1</a></li>
            <li class="navlink"><a href="#">Page 1-2</a></li>
            <li class="navlink"><a href="#">Page 1-3</a></li>
          </ul>
        
        </li>
      -->
        
        <li class="navlink"><a href="dashboard_contactus.php">Contact</a></li>
     
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

   <div style="background-color: #f4f6f7" class="container">
    <center><h2 style="font-weight: 550;letter-spacing: 2px;">My Profile</h2></center>
    <br>
    <br>
     <div class="row">
       <div class="col-md-3 profile_col"></div>
       <div class="col-md-6 profile_col1">
        <?php
  include'connection.php';

  $number=$_SESSION["mob"];

    $sql = "SELECT * FROM customeridentity WHERE mobile =$number";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
?>
             <form method="POST">
    
    <div class="form-group custom">
      <label for="inputlg">Name:-</label>
      <input class="form-control input-lg" id="inputlg" type="text" placeholder="Enter Your Name" name="name" value="<?php echo $row ['name']; ?> ">
      <br>

       <label for="inputlg">Mobile:-</label>
      <input class="form-control input-lg" id="inputlg" type="text" placeholder="Mobile Number" name="mobile" value="<?php echo $row ['mobile']; ?>">
      <br>
       <label for="inputlg">Email:-</label>
      <input class="form-control input-lg" id="inputlg" type="text" placeholder="Email" name="email" value="<?php echo $row ['email']; ?> ">
      <br>
      <center><button class="btn btn-primary" name="update">Save Changes</button></center>
    </div>
    
    
   
  </form>
  <?php

    }
} else{ echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);





?>
<?php

    if(isset($_POST['update']))
    {
      include'connection.php';
      $name=$_POST['name'];
      $email=$_POST['email'];


   $sql = "UPDATE customeridentity SET name= '$name' , email='$email' WHERE mobile=$number";

if (mysqli_query($conn, $sql)) {


  header('Location:editProfile.php');


  echo "<html><center><h4>Record updated successfully</h4></center></html>";
  
   

} else {
    echo "<html><center><h4>Error in updating profile</h4></center></html>";
}

mysqli_close($conn);



//Upadate as well as fetch







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

       </div>
       <div class="col-md-3 profile_col"></div>
     </div>
   </div>



</body>
</html>

<?php
  if($_SESSION["mob"]=="")
   {
     header('Location: index.php');
   }
?>