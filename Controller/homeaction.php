<?php 

session_start();
if (count($_SESSION)===0) 
{
	header("location: ../controller/logout.php");
}
if ($_SERVER['REQUEST_METHOD'] === "POST")
{
        
		$user =$_SESSION['username'];
        $stat = $_POST['status'];
        $photo = $_POST['photo'];
      $user= validate($user);
      $user =sanitize($user); 
     $stat = validate($stat);
     $stat= sanitize($stat);
       
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "project";

                $con = new mysqli($hostname, $username, $password, $database);

                $sql = "INSERT INTO post (username, post, Status) VALUES ('$user','../image/$photo', '$stat')";
                $stmt = $con->query($sql);
    
                if ($stmt ===true )
                 {
                 	$message = "Status Posted !!! ";
                    echo "<script type='text/javascript'>alert('$message');window.location = '../view/home.php';</script>";
               
                    }
                else
                 {
                 	
                        $message = "Status update failed ";
                        echo "<script type='text/javascript'>alert('$message');window.location = '../view/home.php';</script>";
                }
        }


    








function validate($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
function sanitize($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>