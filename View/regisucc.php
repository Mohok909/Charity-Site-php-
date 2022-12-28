<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../model/sucstyle.css">
</head>
<body>

<h1> Registration Successful</h1>
<style> h1 , h2 , p {text-align: center;}</style>

<br>
<br>
 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
 <h2> Do you want to continue </h2>
 <br>
 <br>
<p><button class="btn btn-primary" name="click" type="submit" value="yes">YES</button>
<button class="btn btn-primary" name="click" type="submit" value="no">NO</button></p>
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
		else 
		{
			header("Location: ../view/formreg.php");

		}
	}
	?>

</form>
 <br> <br>	<?php include '../controller/footer.php' ; ?>
 
</body>
</html>