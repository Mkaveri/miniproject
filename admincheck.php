<?php
include 'connection.php';


$query = "select * from admin ";
$result = $conn->query($query);


// output data of each row
while ($row = $result->fetch_assoc()) {



    if ($row["username"] == $_POST['username']) {
        header("location:adminhome.html");
    } else {
        echo "failed";

    }
}


$conn->close();




?>
