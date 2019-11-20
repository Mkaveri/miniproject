<html>
<head></head>
<body style="background-image: url('images/persian.jpg');background-repeat: no-repeat;background-size: 100%">
<h2 align="center">PETS DETAILS</h2>
<?php
include 'connection.php';

if(isset($_GET['id'])){
    $petname=$_GET['id'];
    $msg=mysqli_query($conn,"delete from addpet where petname='$petname'");
    if($msg){
        echo "<script>alert('data deleted')</script>";
    }
}
?>



        <table align="center" border="1">
            <thead>
            <tr>

                <th>Image</th>
                <th>Pet name</th>
                <th> food name</th>
                <th> Amount</th>
                <th> Remove</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $sql='SELECT  * FROM addpet';

            $result=$conn->query($sql);


        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

         ?>

<tr>
    <td><img width="150px" height="150px" name='image' src="images/<?php echo $row['image']; ?> "></td>
    <!--            <td><input type='text' id='' name='PETID' value="--><?php //echo $row['petid']; ?><!-- "></td>-->
    <td><input type='text' id='' name='PETNAME' value="<?php echo $row['petname']; ?> "></td>
    <td><input type='text' id='' name='FOOD' value="<?php echo $row['food']; ?> "></td>
    <td><input type='text' id='' name='AMOUNT' value="<?php echo $row['amount']; ?> "></td>
    <td>
        <a href="fetchpet.php?id=<?php echo $row['petname']; ?>">
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
