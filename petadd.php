<?php

include 'connection.php';

$image=$_POST['image'];
$petname=$_POST['PETNAME'];
$food=$_POST['FOOD'];
$amount=$_POST['AMOUNT'];


$status = false;



$sql = "INSERT INTO addpet(image,petname,food,amount)
values('$image','$petname','$food','$amount')";

if($conn->query($sql))
{
    echo 'PET IS ADDED';
}
else
{
    echo 'error';

}



?>