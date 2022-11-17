<!DOCTYPE html>
<html lang="en">
<head>

    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php require ("header.php");?>

    <div style="margin:auto; width:50%; height:100vh; border:1px solid red; ">

        <div  style="margin:auto; margin-top:100px; width:70%;   border:1px solid red; ">

            <form action="code.php" method="POST" enctype="multipart/form-data">

                <table style="width:100%;height:400px">
                    <caption><b>User Registration Form</b></caption>
                    <tr>
                        <td><label><b>User Name :</b></label></td>
                        <td><input type="text" style="height:35px; width:350px;" name="name" required /></td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Address :</b></label>
                        </td>
                        <td>
                            <input type="text" name="address" required style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Email Id :</b></label>
                        </td>
                        <td>
                            <input type="email"  name="email" required  style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Password :</b></label>
                        </td>
                        <td>
                            <input type="password" name="password" required style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Phone No. :</b></label>
                        </td>
                        <td>
                            <input type="number"  name="number" required style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Gender :</b></label>
                        </td>
                        <td>
                            <input type="radio"  name="gender" required value="Male" /> Male
                            <input type="radio"  name="gender" required value="Female" /> Female
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Photo :</b></label>
                        </td>
                        <td>
                            <input type="file" name="image" required  style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr >
                        <td></td>
                        <td>
                            <button type="submit" name="signup_btn" style="height:35px; width:180px; margin-left: 20px;">Sign Up</button>
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