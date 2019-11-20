<html>
<head></head>
<body style="background-image: url('images/ct.jpeg');background-repeat: no-repeat;background-size: 100%">
<h2 align="center">CUSTOMER DETAILS</h2>
<?php
include 'connection.php';

if(isset($_GET['id'])){
    $cname=$_GET['id'];
    $msg=mysqli_query($conn,"delete from orderfood where cname='$cname'");
    if($msg){
        echo "<script>alert('data deleted')</script>";
    }
}
        ?>
        <table align="center" border="1">
            <thead>
            <th>Cname</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Foodname</th>
            <th>Amount</th>
            </thead>
            <tbody>
            <?php
            $sql='SELECT  * FROM orderfood';

            $result=$conn->query($sql);


            if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                ?>
                <tr>
                    <td><input type='text' id='cname' name='cname' value="<?php echo $row['cname']; ?> "></td>
                    <td><input type='text' id='' name='address' value="<?php echo $row['address']; ?> "></td>
                    <td><input type='text' id='' name='phone' value="<?php echo $row['phone']; ?> "></td>
                    <td><input type='text' id='' name='food' value="<?php echo $row['foodname']; ?> "></td>
<!--                    <td><input type='text' id='' name='amount' value="--><?php //echo $row['total']; ?><!-- "></td>-->

                    <td>
                        <a href="fetchfoodorder.php?id=<?php echo $row['cname']; ?>">
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
