<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
	<link rel="stylesheet" type="text/css" href="../model/sucstyle.css">
</head>
<body>


<style> h1 , h2 , p {text-align: center;}</style>

<h1>  WElCOME TO VOLUNTEER'S OPTION</h1> 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
 <h2> What Do You Want to do ? </h2>
<p><button name="click" type="submit" value="yes">Login</button>
<button name="click" type="submit" value="no"> Registration </button></p>
<?php

echo "<br>";
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] === "POST")

	{ 
		$click = $_POST['click'];

		if ( $click === "yes")

		{
			header("Location: ../view/login.php");

		}

		if ( $click === "no")
		{
			header("Location: ../view/formreg.php");

		}
	}
	?>

</form>
 <br> <br>	<?php include '../controller/footer.php' ; ?>
</body>
</html>