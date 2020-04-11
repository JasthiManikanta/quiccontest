<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['JL_Baird'];
	if($a=="jlbaird"){
		header('Location:q3.php');
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
<h2>2.Television was invented by?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="Sholes" name="JL_Baird" value="Sholes">
  <label for="sholes">Sholes</label><br>
  <input type="radio" id="JLBaird" name="JL_Baird" value="JLBaird">
  <label for="jlbaird">JLbaird</label><br>
  <input type="radio" id="Shockley" name="JL_Baird" value="Shockley">
  <label for="Shockley">Shockley</label><br>
  <input type="radio" id="JohnNapier" name="JL_Baird" value="JohnNapier">
  <label for="johnnapier">JohnNapier</label><br>
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>
