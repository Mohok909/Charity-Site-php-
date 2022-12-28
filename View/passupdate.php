<html>
<head>
  <title>
    Update Password
  </title>
  <link rel="stylesheet" type="text/css" href="../model/123.css">
  <link rel="stylesheet" type="text/css" href="../model/forget.css">

  <script type="text/javascript">
    function validateForm() {
  let x = document.forms["forget"]["pass"].value;
  let y = document.forms["forget"]["pass2"].value;

  if ( x == "" && y == "") 
  {
    alert( "Empty submission");
    return false;
  }

  else if (x == "") {
    alert("Please enter your new password");
    return false;
  }
  else if (y== "") 
  {
    alert("Please re-enter your new password");
    return false;
  }
  else if( x != y)
  {
   alert( "Passwords didn't match!!");
    return false; 
  }
}
</script>
</head>
  <body>



<div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="form">
        <form method="post" name="forget" action="../controller/passupaction.php" onsubmit="return validateForm()">
        <h4>New Password </h4>
        <input class="form-control" type="password" name="pass"  placeholder="Enter your New Password">  
        <h4>Confirm New Password</h4>
        <input class="form-control" type="password" name="pass2" placeholder="Enter re-enter your new password">
        <br>
        <center><input class="btn btn-primary" type="submit" name="submit_email"></center>
        </form>
      </div>
      </div>
    </div>
</div>
<?php include '../controller/footer.php' ; ?>
  </body>
</html>