<html>
<head></head>
<body style="background-image: url('images/p11111.jpg');background-repeat: no-repeat;background-size: 100%">
<h2 align="center">FOOD DETAILS</h2>
<?php
include 'connection.php';


if(isset($_GET['id'])){
    $foodname=$_GET['id'];
    $msg=mysqli_query($conn,"delete from addfood where foodname='$foodname'");
    if($msg){
        echo "<script>alert('data deleted')</script>";
    }
}

?>


        <table align="center" border="1">
            <thead>
            <tr>
                <th>Image</th>
                <th>Food Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql='SELECT  * FROM addfood';

            $result=$conn->query($sql);


            if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

              ?>

<tr>
                <td><img width="150px" height="150px" name='image' src="image/<?php echo $row['image']; ?> "></td>
                <td><input type='text' id='food' name='food' value="<?php echo $row['foodname']; ?> "></td>
                <td><input type='text' id='' name='amount' value="<?php echo $row['amount']; ?> "></td>
    <td>
        <a href="fetchfood.php?id=<?php echo $row['foodname']; ?>">
            <button onClick="return confirm('Do you really want to delete');" class="btn btn-danger">Delete</button>
        </a>
    </td>


</tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        </br>
        <?php

}
?>
</body>
</html>
