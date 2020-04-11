<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['Karl_Benz'];
	if($a=="Karl_Benz"){
		include('connect.php');
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
<h2>5.Who invented the FM radio?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="Daimler" name="Karl_Benz" value="Daimler">
  <label for="four">Daimler</label><br>
  
  <input type="radio" id="Karl Benz" name="Karl_Benz" value="KarlBenz">
  <label for="five">Karl Benz</label><br>
  
  <input type="radio" id="HenryAustin" name="Karl_Benz" value="HenryAustin">
  <label for="six">Henry Austin</label><br>
  
  <input type="radio" id="HenryFord" name="Karl_Benz" value="HenryFord">
  <label for="two">Henry Ford</label><br>
  
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>
