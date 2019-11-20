<!--<html>-->
<!--<head></head>-->
<!--<body style="background-image: url('images/cpl.jpeg')">-->
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
    echo "<script>alert('ordered successfully');</script>";

}
else
{
    echo "<script>alert('order unsuccess');</script>";

}

?>
<script language="JavaScript">document.location="home.html";</script>
<!--</body>-->
<!--</html>-->
