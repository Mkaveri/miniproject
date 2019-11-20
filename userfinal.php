
<?php

include 'connection.php';
$cname=$_POST['uname'];
$petname=$_POST['PETNAME'];
$numberofpets=$_POST['numberofpets'];
$amount=$_POST['AMOUNT'];
$total=$_POST['total'];

$status = false;

$sql = "INSERT INTO finalpay(cname,petname,numberofpets,amount,total)
values('$cname','$petname','$numberofpets','$amount','$total')";

if($conn->query($sql))
{
    echo " THANK YOU FOR YOUR ORDER! SOON YOU WILL GET YOUR PET ";
}
else
{
    echo 'error';

}



?>