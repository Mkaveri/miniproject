<?php
//echo "<h1>ufgeufgu</h1>";
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','petproject');
$conn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if(mysqli_connect_errno()){
    echo "failed to connect to mysql" .mysqli_connect_error($con);
}
//$sql = "SELECT * FROM admin";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo  $row["username"].  "<br>";
//    }
//} else {
//    echo "0 results";
//}
?>