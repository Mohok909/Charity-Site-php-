<?php

include '../Controller/header.php';

?>
<?php
if (count($_SESSION)===0)
{
header("location: ../Controller/logout.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Profie</title>
	<link rel="stylesheet" type="text/css" href="../model/profile.css">
  <link rel="stylesheet" type="text/css" href="../model/123.css">
</head>

<body>


<div class="already" style=" background-color : #98FB98; ">
		<hr class="new1">
    <center>
        <h1 style="text-align:center;"> <?php echo $_SESSION['username']; ?>'s Profile </h1>
        <hr class="new1">
    </center>
    </div>


   <?php

$uname = $_SESSION['username'];
$hostname = "localhost";
$username = "root";
$password = "";
$database = "project";



$con = new mysqli($hostname, $username, $password, $database);
$sql = "SELECT * FROM registration where username = '$uname'";


$stmt = $con->prepare($sql);
$stmt ->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0)
{



while($row = $result->fetch_assoc())
{
$fname = $row['fname'];
$lname= $row['lname'];
$dob= $row["dob"];
$photo = $row["photo"];
$gender= $row["gender"];
$add= $row["address"];
$email= $row["email"];
$phn= $row["phn"];
$prlink= $row["prlink"];


}
}

?>



<br><br><br><br>


<center>

	<div class="container">
  <?php echo" <image src ='"; echo $photo; echo"' alt='Avatar' style='width:300px;height:300px;''>";  ?>
  <div class="overlay">
    <div class="text">
    	<h1><?php echo $fname; echo " "; echo $lname; ?></h1> 
      		<p><?php echo $gender ?></p>
      		<p><?php echo $dob; ?></p>
      		<p><?php echo $phn; ?></p>
      		<p><?php echo $email; ?></p>
      		<p><?php echo $prlink; ?></p>
      		<p><?php echo $add ?></p> 

      		<br>  

    </div>
  </div>
</div>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <br>

      <p><button class="btn btn-primary" style=" box-shadow: 0 4px 8px 0 black; border-radius: 15px; " name="click" type="submit" value="update">Edit Profile !</button></p>


<?php
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] === "POST")
  { 
    $click = $_POST['click'];
    if ( $click === "update")
    {
      header("Location: EditProfile.php");
    }
  }
  ?>
  </form>
</center>





<?php include '../controller/footer.php' ; ?>   
</body>


</html>