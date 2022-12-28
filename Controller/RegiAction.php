<?php

echo "<br>";
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] === "POST")
{
        

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $add = $_POST['add'];
        $mail = $_POST['mail'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $phn = "null";
        $photo = '../image/defult.png';

        if (empty($fname) || empty($lname) || empty($dob) || empty(isset($_POST['gender']))  ||  empty($add) || empty($mail) || empty($phn) || empty($username) || empty($pass))
        {
             $message = "Please Fill The Form Properly ";
            echo "<script type='text/javascript'>alert('$message');window.location = '../view/formreg.php';</script>";
        }

    else
    {


        $date = new DateTime($dob);
        $now = new DateTime();
        $gender = $_POST['gender'];
        $interval = $now->diff($date);
        $user = validate($username);
        $user = sanitize($username);
        $pass = validate($pass);
        $fname = validate($fname);
        $fname = sanitize($fname);
        $lname = validate($lname);
        $lname = sanitize($lname);
        $dob = validate($dob);
        $gender = validate($gender);
        $add = validate($add);
        $add = sanitize($add);
        $mail = validate($mail);

        if ($interval->y < 18)
        {
            $message = "Your age Must be over or equal 18 ";
            echo "<script type='text/javascript'>alert('$message');window.location = '../view/formreg.php';</script>";
            
             
        }

        else
        {
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "project";

                $con = new mysqli($hostname, $username, $password, $database);

                $found = "SELECT * FROM registration WHERE username= '$user'";
                $stmt = $con->prepare($found);
                $stmt->execute();
                $result = $stmt->get_result();
                $data=$result->fetch_assoc();
                if($data)

                    {
                        $message = "User Name already taken ";
                        echo "<script type='text/javascript'>alert('$message');window.location = '../view/formreg.php';</script>";
            

                         

                     }


                $sql = "INSERT INTO registration (username, pass, fname, lname, dob, gender, address, phn, prlink, email, photo) VALUES ('$user','$pass','$fname','$lname','$dob','$gender','$add','$phn','$prlink','$mail','$photo')";
                $stmt = $con->query($sql);
    
                if ($stmt ===true )
                 {
       

                echo "<br>";
                header("Location: ../view/regisucc.php");
                    }
                else
                 {
                        $message = "Error while saving ";
                        echo "<script type='text/javascript'>alert('$message');window.location = '../view/formreg.php';</script>";
                }
        }


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
