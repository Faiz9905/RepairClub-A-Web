<?php
   session_start();

   if(isset($_POST['confirmbooking']))
   {
    //echo "Hello";
     $otp= $_POST['otp'];
     $otpp=$_SESSION["otp"];
    if($_SESSION["otp"]==$otp)
    {
    $servicedate=$_SESSION["servicedate"];//day
    $require1= $_SESSION["geysor"];//require1
    $require2=$_SESSION["roomheater"];//require2
    $require3=$_SESSION["other"];//require3
    $mob=$_SESSION["mob"];//mobilenumber
    $nameofcust= $_POST['name'];
    $address=$_POST['add'];
    $nearby=$_POST['nearby'];
    $city=$_POST['city'];
    $_SESSION["mob"]= $mob;

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
  
  $sql = "INSERT INTO bookingdetails (nameofcust, address, nearby, city, day, require1, require2, require3, mobilenumber)
  VALUES ( '$nameofcust', '$address', '$nearby', '$city', '$servicedate', '$require1','$require2', '$require3', '$mob')";
      

   if (mysqli_query($conn, $sql)) {
       //echo "Ok";
     header('Location:index.php');
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
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="style/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="bootstrap/js/jquery.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="bootstrap/js/bootstrap.js"></script>


</head>
<body>


	<div>
  
  <form class="form-control" method="post">
    
   <center><h3 style="color: #990000">Fill Your Details</u></center></h3>
    <div class="container">
      <label for="name"><p style="font-size: 16px">Name*:-</p></label>
      <input type="text" placeholder="Enter Name" name="name" required="" >
       
      <label for="psw"><p style="font-size: 16px;">Address*:-</p></label>
      <input type="text" placeholder="Enter Address" name="add" required="">
           <div class="row">
            <div class="col-md-6" >
                     <label for="psw"><p style="font-size: 16px;">Near By*:-</p></label>
      <input type="text" placeholder="Landmark" name="nearby" required="" >
             </div>
             <div class="col-md-6">
       <label for="psw"><p style="font-size: 16px;">City:-</p></label>
      <select class="form-control" id="sel1" name="city">
                      <option>Patna</option>
                       <option>Delhi</option>
                     
                 </select>
                 </div>
                 </div>
                  <label for="psw"><p style="font-size: 16px;">Enter OTP--Sent on 9905834067-</p></label>
      <input id="botp" type="password" placeholder="OTP" name="otp" required="">
      <button  name="confirmbooking" onclick="validation();" style="background-color: #990000;color: white;">Confirm booking</button>
     </div>
  </form>
</div>

<script>
  function validation()
  {
   //alert("Hello");
    //swal("Good job!", "You clicked the button!", "success");
  var rotp = '<?php echo $otpp; ?>';
  var eotp= document.getElementById('botp').value;
  if(rotp==eotp)
  {
    alert("@");
    swal("Good job!", "You clicked the button!", "success");
  }
  else
  {
     
  }
}
</script>
	</body>
</html>


