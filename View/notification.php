 <?php 
 session_start();
if (count($_SESSION)===0) 
{
	header("location: ../controller/logout.php");
}

						
?>
<!DOCTYPE html>
<html>
<title>
	Notification
</title>
<head>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../model/profile.css">
</head>
<body>
<?php include '../controller/header.php';?>

<div class="already" style=" background-color : #98FB98; ">


			<hr class="new1">
    <center>
        <h1 style="text-align:center;"> Notification </h1>
        <hr class="new1">
    </center>
</div>
    <div class="noti" style="position: static; margin: 0;  margin-top: 5%; margin-left: 35%;  text-align : left; ">

   <?php
    			$hostname = "localhost";
				$username = "root";
				$password = "";
				$database = "project";
				$con = new mysqli($hostname, $username, $password, $database);
				$sql = "SELECT * FROM noti ORDER BY id DESC;";
				$stmt = $con->prepare($sql);
				$stmt ->execute();
				$result = $stmt->get_result();
				if ($result->num_rows > 0)
				{



				while($row = $result->fetch_assoc())
					{
						
						$status= $row["Status"];
						$time = $row['time'];
						


	  							echo "<div class='myStatus style='box-shadow: 0 4px 8px 0 black; border-radius: 15px; ' '>";
	  							echo"<br>";
  	
                  
                  echo   "STATUS :"; echo $status; echo"<br>"; echo"<br>";
                 echo   "At :"; echo $time; echo"<br>";echo"<br>";
                 echo "<hr>";
                        
                  echo "</div>";
                        			}
			}
    ?>
    </div>
		
  </label>
</form>
<?php include '../controller/footer.php' ; ?>
</body>
</html>