<?php
include 'connection.php';


$query = "select * from customerr ";
$result = $conn->query($query);


// output data of each row
while ($row = $result->fetch_assoc()) {



    if ($row["email"] == $_POST['email']| $row["phone"]==$_POST['ph_no']) {
        header("location:userhome.php");
    } else {
        echo "failed";

    }
}


$conn->close();




?>
