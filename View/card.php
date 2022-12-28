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
	<title>Card</title>
	<link rel="stylesheet" type="text/css" href="../model/123.css">
</head>
<body>
	<?php include '../controller/header.php';?>


<div class="already" style=" background-color : #98FB98; ">


			<hr class="new1">
    <center>
        <h1 style="text-align:center;"> Card / Net Banking </h1>
        <hr class="new1">
    </center>
</div>


	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<table class="table table-dark"  border="4" align="center">
			<thead>
   			<tr>
     		<th > <b>Donor Name </b></th>
     		<th ><center><?php echo $_SESSION['username']?></center>
     		</th>
   			</tr>
   			</thead>
 			<tbody>
    		<tr>
    		<td>
    			<b>Card number</b>	
    		</td>
    		<td>
    			<input type="text" class="form-control" name ="card" maxlength="16" value="" >
    		</td>
    		</tr>
    		<tr>
    			<td>
    				<b>CC/CCV</b>
    			</td>
    			<td>
    				<input type="text" class="form-control" name ="cc" maxlength="3" value="" >
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<b>Expiry</b>
    			</td>
    			<td>
    				<input type="date" class="form-control" name ="expiry" value="">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<b>Ammount</b>
    			</td>
    			<td>
    				<input type="number" class="form-control" name ="amnt" value="">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<b> Identity </b>
    			</td>
    			<td>
    				<select name="identity" value="" >
    				<option value="show"> Show</option>
    				<option value="anonymous">Anonymous</option>
  					</select>
    			</td>
    		</tr>
		</table>
		<br>
		<br>

		<p align="center"><input type="submit" class="btn btn-primary" name="submit" value="donate"></p>
	</form>

	<?php

		echo "<br>";
		echo "<br>";
 		$user= $_SESSION['username'];
		if ($_SERVER['REQUEST_METHOD'] === "POST")
			{
				$cc = $_POST['cc'];
				$card = $_POST['card'];
				$expiry = $_POST['expiry'];
				$amnt = $_POST['amnt'];
				$identity = $_POST['identity'];

				if (empty($card)||empty($expiry)|| empty($cc)|| empty($amnt) ) 
					{
		  				
		  				$message = "Please Fill All Forms Properly";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";
					}
				else
					{ 
						$cc = validate($cc);
						$card = validate ($card);
						$amnt = validate ($amnt);
						$expiry =validate($expiry);
						$identity = validate ($identity);
						$handle = fopen("../model/card.json", "a");
						$arr1 = array('username' => $user , 'card'=> $card, 'cc'=> $cc, 'amnt'=>$amnt, 'identity' =>$identity );
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