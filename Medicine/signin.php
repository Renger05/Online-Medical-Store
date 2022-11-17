<?php
require ("connection.php");

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In</title>
</head>
<body>
<?php require ("header.php");?>



    <?php
        if(isset($_SESSION['status']) && $_SESSION !='')
        {
            ?>
            <div>
                <strong>Hello... !!! </strong><?php echo $_SESSION['status'] ?>
            </div>

            <?php
        }
    ?>

    <div style="margin:auto; width:50%; height:100vh; border:1px solid red; ">

        <div  style="margin:auto; margin-top:100px; width:70%;   border:1px solid red; ">

            <form action="login.php" method="POST">
                <div style="padding:20px 0px;">
                    <label><b>Email Id :</b></label>
                    <input type="email" name="email" required style="height:35px; width:350px;" />
                </div>
                <div style="padding:20px 0px;">
                    <label><b>Password :</b></label>
                    <input type="password" name="password" required style="height:35px; width:350px;" />
                </div>
                <div style="padding:20px 0px; ">
                    <button type="submit" name="login_btn" style="height:35px; width:180px; margin-left: 20px;">Log In</button>
                    <p style="margin:20px 0px 0px 20px; font-size:20px;">Do you have any account ? <a href="signup.php">Sign Up</a></p>
                </div>

            </form>

    
        </div>
    
    </div>

<footer >
    <?php require ("footer.php");?>
    
</footer>
</body>
</html>