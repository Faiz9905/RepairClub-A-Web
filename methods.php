
<?php
  
if(isset($_POST['save']))
{
  echo "Yes";
  
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
   echo "Run";
   $abc= $_POST['name'];
   $sql = "INSERT INTO  customeridentity(mobile)
      VALUES ('$abc')";
       if (mysqli_query($conn, $sql)) {
       echo "Ok";
     
        } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
}
?>