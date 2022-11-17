<?php
require ("connection.php");

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style=" border:1px solid red; ">
        <div style="margin:auto; width:90%; margin-top:40px;">
            

            <div style=" width:100%;">
                <div style="display:flex; text-align:center;">
                    <?php
                        $sql = "SELECT * FROM product ORDER BY id DESC";
                        $result = mysqli_query($conn, $sql);
                        
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($fetch = mysqli_fetch_array($result))
                            {
                                ?>
                                    <div style="width:25%; margin:0px 20px 0px 0px; height:320px;">
                                        <a  href="signin.php">
                                        <img style="border-radius:50%;" src="<?php echo $fetch['medicineimage'] ?>" width="300px" height="220px" alt="">
                                        
                                        <p ><?php echo $fetch['medicinename'] ?></p>
                                        </a><br>
                                        <div style="display:flex;">
                                            <p style="float:left;"><span style=" font-weight:bold;  margin-left:50px; font-size:18px;">Rs. :</span> <span style="color:red;margin-left:15px; font-size:18px;">&#8377;<?php echo $fetch['price'] ?></span></p>
                                            <span style=" margin-left:50px;font-weight:bold; font-size:18px;">Qnty :</span>
                                            <span style="margin-left:15px; font-size:18px;"><?php echo $fetch['qnty'] ?></span>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>