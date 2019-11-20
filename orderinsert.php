<html>
<head>
    <link href="bootstrap.min.css">
    <meta name="viewport"content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet"href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            font-family:arial,helvetica,sans-serif;}
        * {box-sizing:border-box;}
        .input-container{
            display:-ms-flexbox;
            display:flex;
            width:100%;
            height: 46px;
            margin-bottom:15px;
        }
        body{
            margin:0;
            background:url("images/d2.jpg") no-repeat;
            background-size : cover;
            font-family:arial,helvetica,sans-serif;
        }
        .icon{
            padding:10px;
            background:black;
            color:white;
            min-width:50px;
            text-align:center;
        }
        .input-field:focus{
            border:2px solid dodgerblue;
        }
        .btn{
            background-color:black;
            color:white;
            padding:15px 20px;
            border:none;
            cursor:pointer;
            width:100%;
            opacity:0.9;
        }

        .btn:hover{
            opocity:1;
        }


        .card-header h3{
            color: white;
        }
        .card{
            height: 300px;
            margin-bottom: auto;
            width: 330px;
            margin-top: 110px;
            margin-left: 780px;
            background-color: grey !important;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>

<?php

include 'connection.php';

$cname=$_POST['cname'];
$adress=$_POST['address'];
$phone=$_POST['phone'];
$foodname=$_POST['food'];


$status = false;

$sql = "INSERT INTO orderfood(cname,phone,address,foodname)
values('$cname','$phone','$adress','$foodname')";

if($conn->query($sql))
{
    echo "";
}
else
{
    echo 'error';

}
?>

<div class="card">
    <div class="card-header">
        <h3>PAYMENT</h3>
    </div>
    <form action="finalfoodorder.php" style="max-width:500px;margin:auto" method="post">
        <!-- <h2> REGISTRATION FORM</h2> -->
        <?php
        $cname=$_POST['cname'];
        $foodname=$_POST['food'];






        ?>
        <table>
            <tr>
                <td>
                    <div class="input-container">
                        <i class="fa fa-user icon">
                        </i>
                        <input class="input-field"
                               type="text"
                               placeholder="cname" value="<?php echo $cname?>"
                               name="uname">
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="input-container">
                        <i class="fa fa-paw icon">
                        </i>
                        <input class="input-field"
                               type="text"
                               placeholder="foodname" value="<?php echo $foodname?>"
                               name="food">
                    </div>
                </td>
            </tr>


            <tr>
                <td>
                    <div class="input-container">
                        <i class="fa fa-money icon"></i>
                        <?php
                        $query="select * from addfood where foodname='".$foodname."'";
                        $res=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_array($res)){
                            $amount=$row['amount'];
                        }

                        echo"

                                    <input class='input-field'
                                           type='text' placeholder='amount' value='".$amount."'
                                           name='amount'";
                        ?>

                        >
                    </div>
                </td>
            </tr>
<!--            <tr>-->
<!--                <td>-->
<!--                    --><?php
//
//                    echo "
//                          <div class='input-container'>
//                          <i class='fa fa-money icon'></i>
//                          <input class='input-field'
//                               value='".$amount*$numberofpets."' type='text' placeholder='total'
//                               name='total'>
//                    </div>";
//                    ?>
<!---->
<!--                </td>-->
<!--            </tr>-->
        </table>

        <div class="input-container">
            <input  type="submit" placeholder="submit"
                    name="submit" class="btn">
        </div>


    </form>
</div>
<div class="card-footer">
</div>


</div>

</body>

</html>
