
<?php

include 'connection.php';
$cname=$_POST['uname'];
$foodname=$_POST['food'];
$total=$_POST['AMOUNT'];

$status = false;

$sql = "INSERT INTO finalfood(cname,foodname,total)
values('$cname','$foodname','$total')";

if($conn->query($sql))
{
    echo "<script>alert('ordered successfully');</script>";

}
else
{
    echo "<script>alert('order unsuccess');</script>";

}

?>
<script language="JavaScript">document.location="home.html";</script>