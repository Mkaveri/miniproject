<html>
<head></head>
<body style="background-image: url('images/do1.jpg');background-repeat: no-repeat;background-size: 100%">
<h2 align="center">CUSTOMER DETAILS</h2>
<?php
include 'connection.php';

if(isset($_GET['id'])){
    $cname=$_GET['id'];
    $msg=mysqli_query($conn,"delete from finalpay where cname='$cname'");
    if($msg){
        echo "<script>alert('data deleted')</script>";
    }
}
?>
<table align="center" border="1">
    <thead>
    <th>Cname</th>
    <th>Petname</th>
    <th>Numberofpets</th>
    <th>Amount</th>
    <th>Total</th>
    </thead>
    <tbody>
    <?php
    $sql='SELECT  * FROM finalpay';

    $result=$conn->query($sql);


    if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        ?>
        <tr>
            <td><input type='text' id='cname' name='uname' value="<?php echo $row['cname']; ?> "></td>
            <td><input type='text' id='' name='PETNAME' value="<?php echo $row['petname']; ?> "></td>
            <td><input type='text' id='' name='numberofpets' value="<?php echo $row['numberofpets']; ?> "></td>
            <td><input type='text' id='' name='AMOUNT' value="<?php echo $row['amount']; ?> "></td>
            <td><input type='text' id='' name='total' value="<?php echo $row['total']; ?> "></td>

            <td>
                <a href="fetchfinal.php?id=<?php echo $row['cname']; ?>">
                    <button onClick="return confirm('Do you really want to delete');" class="btn btn-danger">Delete</button>
                </a>
            </td>

        </tr>
        <?php
    }
    ?>
</table>
    </tbody>

    </br>
<?php

}
?>
</body>
</html>
