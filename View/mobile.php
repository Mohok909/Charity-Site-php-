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
	<title>Mobile Banking</title>
	<link rel="stylesheet" type="text/css" href="../model/123.css">
</head>
<body>
	<?php include '../controller/header.php';?>

<div class="already" style=" background-color : #98FB98; ">


			<hr class="new1">
    <center>
        <h1 style="text-align:center;"> MOBILE BANKING </h1>
        <hr class="new1">
    </center>
</div>


	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<table class="table table-dark" style="align-items: center; text-align: center;" border="2" align="center">
			<thead>
   			<tr>
     		<th > <b>Donor Name </b></th>
     		<th > <center><?php echo $_SESSION['username']?></center>
     		</th>
   			</tr>
   			</thead>
 			<tbody>
  			<tr>
    		<td> <b>Method </b> </td>
    		<td> <select name="method" class="form-control" value="" >
    		<option style="text-align: center; " value="None"> None</option>
    		<option style="text-align: center; " value="Bkash">Bkash</option>
    		<option style="text-align: center; " value="Rocket">Rocket</option>
    		<option style="text-align: center; " value="Nagad">Nagad</option>
  			</select>
  			</td>
    		</tr>
    		<tr>
    		<td>
    			<b>Account number</b>	
    		</td>
    		<td>
    			<center><input type="tel" class=" form-control" name ="phn" value=""></center>
    		</td>
    		</tr>
    		<tr>
    			<td>
    				<b>Ammount</b>
    			</td>
    			<td>
    				<center><input type="number" class=" form-control" name ="amnt" value=""></center>
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<b>Identity</b>
    			</td>
    			<td>
    				<select style="text-align: center; " name="identity" value="" >
    				<option style="text-align: center; " value="show"> Show</option>
    				<option style="text-align: center; " value="anonymous">Anonymous</option>
  					</select>
    			</td>
    		</tr>
		</table>

		<br>
		<br>

		<p align="center"><input type="submit" class=" btn-primary " name="submit" value="donate"></p>
	</form>

	<?php

		echo "<br>";
		echo "<br>";
 		$user= $_SESSION['username'];
		if ($_SERVER['REQUEST_METHOD'] === "POST")
			{
				$method = $_POST['method'];
				$phn = $_POST['phn'];
				$amnt = $_POST['amnt'];
				$identity = $_POST['identity'];

				if (empty($method)|| empty($phn)|| empty($amnt) ) 
					{
		  				echo "Please Fill All Forms Properly";
					}
				else
					{ 
						$method = validate($method);
						$phn = validate ($phn);
						$amnt = validate ($amnt);
						$identity = validate ($identity);
						$handle = fopen("../model/mbl.json", "a");
						$arr1 = array('username' => $user , 'method'=> $method, 'phn'=> $phn, 'amnt'=>$amnt, 'identity' =>$identity );
						$json = json_encode($arr1);
						$res = fwrite($handle, $json . "\n");
						if ($res)
							{
								$message = "Donating Successful.....!!!";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";
							} 
						else
							{
								$message = "Error Donating......!!!!!";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";
							}

					}



			}
			function validate($data)
			{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
	?>

	<?php include '../controller/footer.php' ; ?>
</body>
</html>