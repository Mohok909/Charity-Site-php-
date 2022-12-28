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
	Home
</title>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<meta charset="UTF-8">
	<style type="text/css">
		body{
			background-color: #F0F8FF;
		}
		.status{
			display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
		}
		.myStatus{
			border: 1px solid black;
			border-radius: 15px;
			box-shadow: 10px;
			padding:   15px;
			margin: 10px;
			box-shadow: 0 4px 8px 0 black;
			background-color: white;
		}

		div.post {
/*position: absolute;*/
position: relative;
font-size: 15px;
}
.delete-btn{
	background: red;
	color: white;
	max-height: 50px;
	max-width: 80px;
	border-radius: 50px;
	cursor: pointer;
}

/*Search Output*/
#output{
	margin: 30px;
	padding: 15px;
	display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}

	</style>
	<script type="text/javascript">
		
		function validateForm() {
  let x = document.forms["post"]["status"].value;
  let y = document.forms["post"]["photo"].value;

  if ( x== "" && y == "")
   {
   	alert("Empty submission");
    return false;
   }
   else if (x == "") {
    alert("write something ");
    return false;
  }
  else if (y == "") {
    alert("Upload a photo");
    return false;
  }
 }


	</script>
	<link rel="stylesheet" type="text/css" href="../model/123.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
	<div class="src" style=" position:relative;  ">
<?php include '../controller/header.php';?>
<label><i class="fas fa-search"></i>&nbsp;SEARCH:&nbsp;&nbsp;</label><input type="text" style="border-radius: 15px; " placeholder=" Search" name="searchInput" id="searchInput">
</div>
<div>


	<div id="output">

  </div>
                
                





</div>
<div class="post" style=" margin: 0; top: 100px; margin-top: 0%; margin-left: 5%; text-align : left;  ">

  	<form name="post" action="../controller/homeaction.php" onsubmit="return validateForm()" method = "POST" >

  	<input type="textarea" size="50" name="status" style="height:100px; background: #8FBC8F ;border-radius: 15px;" placeholder=" Whats on your mind "> <br> <br>

  	<input type="file" name="photo" >

  	<br>
  	<br>

<input class="btn btn-primary" style="border-radius: 15px; " type="submit" name="submit" value="POST"> 
  </form>

  	
  </div>
  
  <div class=" status" style="position: relative; top: -250px; margin: 0;  margin-top: 2%; margin-left: 35%;  text-align : left;  ">

  	<?php

				$hostname = "localhost";
				$username = "root";
				$password = "";
				$database = "project";
				$con = new mysqli($hostname, $username, $password, $database);
				$sql = "SELECT * FROM post ORDER BY id DESC;";
				$stmt = $con->prepare($sql);
				$stmt ->execute();
				$result = $stmt->get_result();
				if ($result->num_rows > 0)
				{



				while($row = $result->fetch_assoc())
					{
						$fname = $row["username"];
						$status= $row["Status"];
						$photo = $row["post"];


	  							echo "<div class='myStatus'>";
  	
                  echo "POSTED BY : "; echo $fname ; echo"<br>";echo"<br>";
                        
                  echo   "STATUS :"; echo $status; echo"<br>"; echo"<br>";
                        
                  echo" <image src ='"; echo $photo; echo"' alt='Avatar' style='width:300px;height:300px;''>"; echo"<br>"; echo"<br>"; 
                  if ($fname === $_SESSION['username'])
                  {
										echo "<button Class = 'delete-btn'> Delete </button>";

									}


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