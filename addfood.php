<html>
<head></head>
<body >
<?php

include 'connection.php';

$image=$_POST['image'];
$food=$_POST['food'];
$amount=$_POST['amount'];


$status = false;



$sql = "INSERT INTO addfood(image,foodname,amount)
values('$image','$food','$amount')";

if($conn->query($sql))
{
    echo 'FOOD IS ADDED';
}
else
{
    echo 'error';

}



?>
</body>
</html>
