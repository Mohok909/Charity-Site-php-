<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

<link rel="stylesheet" type="text/css" href="../model/123.css">
<link rel="stylesheet" type="text/css" href="../model/style.css">
<script type="text/javascript">
    function validateForm() {
  let x = document.forms["reg"]["username"].value;
  let y = document.forms["reg"]["pass"].value;
  let a = document.forms["reg"]["firstname"].value;
  let b = document.forms["reg"]["lastname"].value;
  let c = document.forms["reg"]["gender"].value;
  let d = document.forms["reg"]["dob"].value;
  let e = document.forms["reg"]["add"].value;
  let f = document.forms["reg"]["mail"].value;



  if ( x == "" && y == "" && a == "" && b == "" && c == "" && d == "" && e == "" && f == "") 
  {
  	alert( "Empty submission");
  	return false;
  }
  else if (x == "") {
    alert("Username is empty");
    return false;
  }
  else if (y== "") 
  {
  	alert("Password is empty");
  	return false;
  }
  else if (a== "") 
  {
  	alert("First Name is empty");
  	return false;
  }
  else if (b== "") 
  {
  	alert("Last Name is empty");
  	return false;
  }
  else if (c== "") 
  {
  	alert("Gender is not selected");
  	return false;
  }
  else if (d== "") 
  {
  	alert("Date of birth is not given");
  	return false;
  }
  else if (e== "") 
  {
  	alert("Address is empty");
  	return false;
  }
  else if (f== "") 
  {
  	alert("Email is empty");
  	return false;
  }

}
</script>
</head>
<body>


<div>

	<div class="container">
	<div class="row">
	<div class="col-sm-5">
		<h1>Registration Form</h1>

		<div class="already">
			<h2><center> <br> Already Registered ?<br> <a href ="../view/login.php"> Click here</a> <br>To Login </center></h2>
		</div>
	<div class="form">
		<form name="reg" action="../Controller/RegiAction.php" onsubmit="return validateForm()" method="POST">
		<b>Username:  </b><input class="form-control" type="text" name="username" placeholder="User name" >
		<br>
		<b>Password:  </b><input class="form-control" type="password" name="pass" placeholder="Password"  >
		<br>
		<b>First Name:  </b><input class="form-control" type="text" name="firstname" placeholder="First name"  >
		<br>
		<b>Last Name:  </b><input class="form-control" type="text" name="lastname" placeholder="Last name"  >
		<br>
		<b>Choose your Gender : </b>
		<input type="radio" name="gender" value="Male"  >
		Male
		<input type="radio" name="gender" value="Female" >
		Female
		<input type="radio" name="gender" value="other" >
		Other
		<br><br>
		<b>Date of birth:  </b><input class="form-control" type="date" name = "dob"  >
		<br>
		<b>Present Address: </b><input class="form-control" type="textarea" name ="add" placeholder="Present Address" >
		<br>
		<b>Email:  </b><input class="form-control" type="email" name ="mail" placeholder="E-mail">
		<br>
		<br>
		</p>
		<br>
		<input class="btn btn-primary" type="submit" name="submit" value="Sign Up"> <input class="btn btn-primary" type="reset" name="reset">
		</form>
	</div>
	</div>
	</div>
	</div>

</div>
		<br><br>
		<?php include '../controller/footer.php' ; ?>
</body>
</html>