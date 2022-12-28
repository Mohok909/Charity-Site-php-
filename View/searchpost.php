<?php

// Create connection

$hostname = "localhost";
$username = "root";
$password = "";
$database = "project";
$con = new mysqli($hostname, $username, $password, $database);

$searchInput = $_POST['searchInput'];

$sql = "SELECT * FROM post WHERE username LIKE '%$searchInput%'";

$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "	 <div class='myStatus'>
                    <center><p>POSTED BY : " . $row['username'] . "</p></center><br><br>
                    STATUS :" . $row['Status'] . "<br><br>
                    <image src ='" . $row['post'] . "' alt='Avatar' style='width:100px;height:100px;''>
                    <br>
                </div>";
    }
} else {
    echo "<tr><td>No result found</td></tr>";
}
