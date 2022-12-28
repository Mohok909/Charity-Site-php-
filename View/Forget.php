<html>
<head>
  <title>
    Forget Password
  </title>
  <link rel="stylesheet" type="text/css" href="../model/123.css">
  <link rel="stylesheet" type="text/css" href="../model/forget.css">

  <script type="text/javascript">
    function validateForm() {
  let x = document.forms["forget"]["username"].value;
  let y = document.forms["forget"]["email"].value;

  if ( x == "" && y == "") 
  {
    alert( "Empty submission");
    return false;
  }
  else if (x == "") {
    alert("Please enter your Username");
    return false;
  }
  else if (y== "") 
  {
    alert("Please enter your email");
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
        <form method="post" name="forget" action="../controller/forgetaction.php" onsubmit="return validateForm()">
        <h4>Enter Your User Name</h4>
        <input class="form-control" type="text" name="username"  placeholder="Enter your User Name">  
        <h4>Enter Your Email Address To Send Password Link</h4>
        <input class="form-control" type="text" name="email" placeholder="Enter a email">
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