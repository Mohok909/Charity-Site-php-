<html>
<head>
  <title>
   Varification
  </title>
  <link rel="stylesheet" type="text/css" href="../model/123.css">
  <link rel="stylesheet" type="text/css" href="../model/forget.css">

  <script type="text/javascript">
    function validateForm() {
  let x = document.forms["forget"]["code"].value;

  if  (x == "") {
    alert("Please enter the varification");
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
        <form method="post" name="forget" action="../controller/forget2action.php" onsubmit="return validateForm()">
        <h4>Enter the varification code </h4>
        <input class="form-control" type="text" name="code"  placeholder="Enter the code send to your email address">  
        <br>
       <center> <input class="btn btn-primary" type="submit" name="submit_email"> </center>
        </form>
      </div>
      </div>
    </div>
</div>
<?php include '../controller/footer.php' ; ?>
  </body>
</html>