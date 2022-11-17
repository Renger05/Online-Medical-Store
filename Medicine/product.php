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
                    <caption><b>Medicine Details Form</b></caption>
                    <tr>
                        <td><label><b>Medicine Name :</b></label></td>
                        <td><input type="text" style="height:35px; width:350px;" name="medicinename" required /></td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Quantity :</b></label>
                        </td>
                        <td>
                            <input type="number" name="qnty" required style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    
                   
                    <tr>
                        <td>
                            <label><b>Price :</b></label>
                        </td>
                        <td>
                            <input type="number"  name="price" required style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label><b>Medicine Photo :</b></label>
                        </td>
                        <td>
                            <input type="file" name="medicineimage" required  style="height:35px; width:350px;" />
                        </td>
                    </tr>
                    <tr >
                        <td></td>
                        <td>
                            <button type="submit" name="save_btn" style="height:35px; width:180px; margin-left: 20px;">Save</button>
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