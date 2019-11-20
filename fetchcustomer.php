<html>
<head></head>
<body style="background-image: url('images/d2.jpg');background-repeat: no-repeat;background-size: 100%">
<h2 align="center">CUSTOMER DETAILS</h2>
<?php
include 'connection.php';

if(isset($_GET['id'])){
    $email=$_GET['id'];
    $msg=mysqli_query($conn,"delete from customerr where email='$email'");
    if($msg){
        echo "<script>alert('data deleted')</script>";
    }
}

?>

        <table align="center" border="1">
            <thead>
            <th>Cname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Petname</th>
            <th>Numberofpets</th>
            </thead>
            <tbody>
            <?php
            $sql='SELECT  * FROM customerr';

            $result=$conn->query($sql);


            if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                ?>

                <tr>
                    <td><input type='text' id='uname' name='uname' value="<?php echo $row['cname']; ?> "></td>
                    <td><input type='text' id='' name='email' value="<?php echo $row['email']; ?> "></td>
                    <td><input type='text' id='' name='ph_no' value="<?php echo $row['phone']; ?> "></td>
                    <td><input type='text' id='' name='ADDRESS' value="<?php echo $row['address']; ?> "></td>
                    <td><input type='text' id='' name='pname' value="<?php echo $row['petname']; ?> "></td>
                    <td><input type='text' id='' name='no_of_pets' value="<?php echo $row['numberofpets']; ?> "></td>
                    <td>
                        <a href="fetchcustomer.php?id=<?php echo $row['email']; ?>">
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
