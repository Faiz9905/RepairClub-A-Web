<?php
 session_start();
 if(isset($_POST['save']))
 {
  $number=$_POST['number'];
   echo "Response: ".$number;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
      	function chk()
      	{
      		var number = document.getElementById('number').value;
      		var dataNumber = 'Number = '+number;
      		$.ajax({
      			type: "POST",
      			url: "page2.php",
      			data:dataNumber,
      			cache: false,
      			success:function(html){
      				$('#msg').html();
      			}
      		});
      		return false;
      	}
      </script>
</head>
<body>
	<form action="page1.php" method="POST" id="form"
	  <label for="">Enter Your Number: </label>
	  <br>
	  <input type="text" name="number">
	  <br>
	  <input type="submit" value="Submit" name="save"  onclick="return chk()">>
	  </form>
	  <p id="msg"></p>

</body>
</html>
