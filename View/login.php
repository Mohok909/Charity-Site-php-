<!DOCTYPE html>
<html>
<head>
    
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../model/123.css">
    <link rel="stylesheet" type="text/css" href="../model/lgstyle.css">
    <script type="text/javascript">
    function validateForm() {
  let x = document.forms["login"]["username"].value;
  let y = document.forms["login"]["pass"].value;

  if ( x == "" && y == "") 
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
}
</script>
</head>
<body>

<div>

	<div class="container">
	<div class="row">
	<div class="col-sm-5">
				
				<br>
		<div class="already">
			<h2><center> <br> Not Registered ?<br><a href ="formreg.php"> Click here</a> <br>to register  </center></h2>
		</div>
		<div class="form">
			<h1> <i>User Login </i></h1>
	<form name="login" action="../controller/loginAction.php" onsubmit="return validateForm()" method="POST">
     
		<b>Username:  </b><input class="form-control" type="text" name="username" placeholder="User name" >
		<br>
		<b>Password:  </b><input class="form-control" type="password" name="pass" placeholder="Password" >
	</p>

   
    <br>
	 
			<input class="btn btn-primary" type="submit" name="submit" value="Sign In"> <input class="btn btn-primary" type="reset" name="reset"> <br> <br>
			<a href="forget.php"> <input class="btn btn-primary" type="button" name="frgt" value="Forget Password"> </a>
    </form>


    </div>
	</div>
	</div>
</div>


    

<br> <br>
</body>
</html>