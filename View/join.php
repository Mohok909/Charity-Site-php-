<?php
session_start();
if (count($_SESSION)===0)
{
	header("location: ../controller/logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transaction</title>
	<style type="text/css">
		button.active{
			background-color: dodgerblue;
  			color: white;
  			height: 70px;
  			width: 70px;
  			border: none;
		} 
		.container {


		}
	</style>
</head>
<body>
	<?php include '../controller/header.php';?>

<div class="already" style=" background-color : #98FB98; ">


			<hr class="new1">
    <center>
        <h1 style="text-align:center;">PERTICIPATE IN DONATION PROGRAM </h1>
        <hr class="new1">
    </center>
</div>
	
	  

<div class="container" style=" position: static; margin: 0;  margin-top: 5%; margin-left: 35%;  text-align : left; align-items: center; ">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
 <h2> Available Banking System </h2> <br> <br>
<p><button name="click" class="active" type="submit" value="mbl">MOBILE BANKING</button> &nbsp;&nbsp;
<button name="click" class="active" type="submit" value="card"> CARDS </button> &nbsp;&nbsp;
</p>
</div>

<?php

echo "<br>";
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] === "POST")

	{ 
		$click = $_POST['click'];

		if ( $click === "mbl")

		{
			header("Location: ../view/mobile.php");

		}

		if ( $click === "card")
		{
			header("Location: ../view/card.php");

		}
		
	}
	?>

</form>

<br><br><br><br>
<fieldset>
<p>	We accept donation via : <b> <a href="https://www.bkash.com" >Bkash </a> &nbsp;&nbsp; <a href="https://www.dutchbanglabank.com/rocket/rocket.html"> Rocket </a> &nbsp;&nbsp; <a href="https://nagad.com.bd/en/"> Nagad </a> &nbsp;&nbsp;  <a href="https://bd.visa.com"> Visa  </a> &nbsp;&nbsp; <a href="https://www.mastercard.com/global/en.html"> MasterCard </a> &nbsp;&nbsp; </b> and other options </p>  
</fieldset>
<br> <br>	<?php include '../controller/footer.php' ; ?>
</body>
</html>
