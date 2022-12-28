<!-- <?php
session_start();
if (count($_SESSION)===0)
{
header("location: ../Controller/logout.php");
}
?> -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #F0F8FF;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
  box-shadow: 0 4px 8px 0 black;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  align-items: center;
}

.header a:hover {
  background-color: lightskyblue;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}
.header a.not {
  background-color: red;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <b><a href="../view/home.php" class="logo" style=" top: 50%; left: 50%;   transform: translate(300% , 50%); "> Gracious Giver </a></b>

<a href="../view/home.php" class="logo" style=" top: 50%; left: 50%; box-shadow: 0 4px 8px 0 black; transform: translate(-120% , -25%); "> <img id="myImg" src="../image/logo.gif" alt="Snow" style="width:100% ;max-width:150px;"> </a>  
 
  <div class="header-right" >


    <a class="active" href="../view/home.php">HOME</a>

    <a class ="active" href="../view/Profile.php">Profile</a>
    <a class="active" href="../view/notification.php">Notification</a>
    <a class ="active" href="../view/join.php">Join Donation</a>
    <a class="not" href="../controller/logout.php">Logout</a>

  </div>
</div>
<hr>

</body>
</html>
