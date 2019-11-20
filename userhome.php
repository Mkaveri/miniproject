<!DOCTYPE html>
<html>
<head>
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
            background:url("images/mainecoon.jpg") no-repeat;
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
            width: 260px;
            margin-top: 80px;
            margin-left: 780px;
            background-color: gray !important;
        }
        h3{
            text-align: center;
        }

    </style>
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>ORDER HERE</h3>
            </div>
            <!--<label style="font-size:30px;margin-left:320px;color:black">REGISTER HERE</label>-->
            <!--</div><br><br><br><br>-->
            <div class="card-body">
                <form action="userreg.php" style="max-width:500px;margin:auto" method="post">
                    <!-- <h2> REGISTRATION FORM</h2> -->
                    <div class="input-container">
                        <i class="fa fa-user icon">
                        </i>
                        <input class="input-field"
                               type="text"
                               width="100"
                               placeholder="username"
                               name="uname">
                    </div>


                    <?php
                    include 'connection.php';
                    $query="select * from addpet";
                    $query1="select * from addpet";
                    //                    $query3='select * from addfood';
                    $res=mysqli_query($conn,$query);
                    $res1=mysqli_query($conn,$query1);
                    //                    $res3=mysqli_query($conn,$query3)


                    ?>

                    <!--                    <div class="input-container">-->
                    <!--                        <i class="fa fa-money icon"></i>-->
                    <!--                        <select style="width: 110px"  name="food" id="">-->
                    <!--                            <option>select pet food</option>-->
                    <!---->
                    <!--                            --><?php //while($row=mysqli_fetch_array($res3)):;?>
                    <!--                                <option type="text" name="food" value="--><?php //echo $row['foodname'];?><!--">--><?php //echo $row['foodname'];?><!--</option>-->
                    <!--                            --><?php //endwhile;?>
                    <!--                        </select>-->
                    <!--                    </div>-->


                    <div  class="input-container">
                        <i class="fa fa-paw icon"></i>
                        <select style="width: 110px"  name="PETNAME" id="">
                            <option>choose pet</option>

                            <?php while($row=mysqli_fetch_array($res)):;?>


                                <option type="text" name=PETNAME" value="<?php echo $row['petname'];?>"><?php echo $row['petname'];?></option>




                            <?php endwhile;?>
                        </select>
                    </div>



                    <div class="input-container">
                        <i class="fa fa-money icon"></i>
                        <input class="input-field"
                               type="number" placeholder="no_of pets"
                               name="no_of_pets">
                    </div>

                    <!--<div class="input-container">-->
                    <!--<i class="fa fa-money icon"></i>-->
                    <!--<input class="input-field"-->
                    <!--type="text" placeholder="total_amnt"-->
                    <!--name="total-amnt">-->
                    <!--</div>-->


                    <div class="input-container">
                        <input  type="submit" placeholder="submit"
                                name="submit" class="btn">
                    </div>

                </form>
            </div>
            <div class="card-footer">
            </div>

        </div>
    </div>
</div>
</body>
</html>

