<?php
session_start();
if (count($_SESSION)===0) 
{
	header("location: ../controller/logout.php");
}


if ($_SERVER['REQUEST_METHOD'] === 'POST')    

{ 
        	$con = $_POST['code'];
        
        	if ($con == $_SESSION['code'])
        	{
        		$message= "Varification successful";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/passupdate.php';</script>";

        	}
        	else 
        	{
        		session_unset();
				session_destroy();
        		$message= "Varification code did not macth";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/forget.php';</script>";

        	}
        
}


