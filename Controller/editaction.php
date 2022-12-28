<?php
session_start();
if (count($_SESSION)===0)
{
header("location: ../controller/logout.php");
}




if ($_SERVER['REQUEST_METHOD'] === 'POST')



{
$pass = $_POST['pass'];
$fname = $_POST['fname'];
$dob= $_POST['dob'];
$email= $_POST['email'];
$gender= $_POST['gender'];
$lname =$_POST['lname'];
$phn =$_POST['phn'];
$prlink =$_POST['prlink'];
$add =$_POST['add'];
$photo =$_POST['photo'];
$user= $_SESSION['username'];

if(empty($photo)||empty($fname)||empty($lname)||empty($email)||empty($add))
{
	$message= "You must upload a photo";
echo "<script type='text/javascript'>alert('$message');window.location = '../view/editprofile.php';</script>";

}
else
{


$hostname = "localhost";
$username = "root";
$password = "";
$database = "project";



$con = new mysqli($hostname, $username, $password, $database);




$sql = "UPDATE registration set fname='$fname', address= '$add', prlink= '$prlink', phn='$phn', lname='$lname', dob='$dob',gender='$gender',email='$email', photo= '../image/$photo', pass='$pass' where username ='$user' ";



$data =$con->query($sql);



if ($data === TRUE )
{



$message= "Information has been updated";
echo "<script type='text/javascript'>alert('$message');window.location = '../view/profile.php';</script>";





}
else
{


 $message= "Failed updating ";
 echo "<script type='text/javascript'>alert('$message');window.location = '../view/EditProfile.php';</script>";
}
}
}
?>