<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['yes'];
	if($a=="false"){
		header('Location:q5.php');
	}else{
		echo '<script>alert("You Lost!")</script>';
		//header('Location:q1.php');
	}
}
?>

<html>
<head>
</head>
<body>
<h2>4.Is 7<-7?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="Six" name="yes" value="false">
  <label for="four">False</label><br>
  
  <input type="radio" id="Seven" name="yes" value="true">
  <label for="Seven">True</label><br>
  
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>
