<?php
session_start();
       /*DataBase Connection  creating table of ustomer by using their mobile number */
      
    /*  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerdetails";

$conn = mysqli_connect($servername, $username, $password, $dbname);
*/
  $number=$_POST['number'];
  require('textlocal.class.php');

$textlocal = new Textlocal(false, false, 'zLPkmVy8ibM-Xex836WbrsIPPvAK6rOdBjtGoeqmh0');

$numbers = array($number);
$sender = 'RECLUB';
$otp = mt_rand(1000,9999);
$message = "This is your OTP: ". $otp;
$message= "Your OTP is ". $otp. ". Please Enter this OTP to Continue. Please DO NOT share this OTP with anyone. RepiarClub.";

//Your OTP is %%|SampleOTP^{"inputtype" : "text", "maxlength" : "4"}%%. Please Enter this OTP to Continue. Please DO NOT share this OTP with anyone. RepiarClub.

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //setcookie('otp',$otp);
    $_SESSION["otp"] = $otp;
    $_SESSION['mob']= $number;
    echo "OTP Successfully Send";
} catch (Exception $e) {
    die('Error: ' . $e->getMessage() );
    //
}
?>