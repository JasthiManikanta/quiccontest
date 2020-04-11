<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['Biro_Brothers'];
	if($a=="BiroBrother"){
		header('Location:q2.php');
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
<h2>1.Who invented the Ball Point Pen?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="BiroBrothers" name="Biro_Brothers" value="BiroBrothers">
  <label for="biro brothers">Biro Brothers</label><br>
  <input type="radio" id="WatermanBrothers" name="Biro_Brothers" value="WatermanBrothers">
  <label for="waterman brothers">Waterman Brothers</label><br>
  <input type="radio" id="BiccBrothers" name="Biro_Brothers" value="BiccBrothers">
  <label for="biccbrothers">Bicc Brothers</label><br>
  <input type="radio" id="WriteBrothers" name="Biro_Brothers" value="WriteBrothers">
  <label for="writebrothers">Write Brothers</label><br>
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>
