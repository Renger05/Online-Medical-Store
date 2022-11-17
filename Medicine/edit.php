<?php
require ("connection.php");

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php require ("header.php");?>


    <?php
        if(isset($_SESSION['status']) && $_SESSION !='')
        {
            ?>
            <div>
                <strong><?php echo $_SESSION['status'] ?></strong>
            </div>

            <?php
        }
    ?>

    <div style="margin:auto; width:50%; height:100vh; border:1px solid red; ">

        <div  style="margin:auto; margin-top:100px; width:70%;   border:1px solid red; ">

            <?php

                $id = $_REQUEST['id'];
                $query = "SELECT * FROM user WHERE id=$id";
                $data = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($data);

            ?>



            <form action="code.php" method="POST" enctype="multipart/form-data">

                <table style="width:100%;height:400px">
                    <caption><b>User Form Updation</b></caption>
                    <tr>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td><label><b>User Name :</b></label></td>
                        <td><input type="text" style="height:35px; width:350px;" name="name" value="<?php echo $row['name'] ?>" required /></td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Address :</b></label>
                        </td>
                        <td>
                            <input type="text" name="address" value="<?php echo $row['address'] ?>" required style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Email Id :</b></label>
                        </td>
                        <td>
                            <input type="email"  name="email"  value="<?php echo $row['email'] ?>" required  style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Password :</b></label>
                        </td>
                        <td>
                            <input type="password" name="password" value="<?php echo $row['password'] ?>" required style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Phone No. :</b></label>
                        </td>
                        <td>
                            <input type="number"  name="number" value="<?php echo $row['number'] ?>" required style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Gender :</b></label>
                        </td>
                        <td>
                            <input type="radio"  name="gender" required value="Male" <?php if($row['gender'] == "Male"){echo "checked";} ?> /> Male
                            <input type="radio"  name="gender" required value="Female" <?php if($row['gender'] == "Female"){echo "checked";} ?> /> Female
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                        <img src="<?php echo $row['image'] ?>" width="100px" height="100px"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Photo :</b></label>
                        </td>
                        <td>
                           
                            <input type="file" name="image"  style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr >
                        <td></td>
                        <td>
                            <button type="submit" name="update_btn" style="height:35px; width:180px; margin-left: 20px;">Update</button>
                        </td>
                    </tr>

                </table>
            </form>

    
        </div>
    
    </div>

<footer >
    <?php require ("footer.php");?>
    
</footer>
</body>
</html>