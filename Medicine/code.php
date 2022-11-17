<?php 
    require ("connection.php");
    
    session_start();

    if(isset($_POST['signup_btn']))
    {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];        
        $password = $_POST['password'];
        $number = $_POST['number'];
        $gender = $_POST['gender'];

        $il = $_FILES['image']['name'];
        $path = 'user_images/'.time().".".$il;
        $t = $_FILES['image']['tmp_name'];
        move_uploaded_file($t, $path);

        $query = "INSERT INTO user (name,address,email,password,number,gender,image) VALUES('".$name."','".$address."','".$email."','".$password."','".$number."','".$gender."','".$path."')";

        
        $result = mysqli_query($conn, $query);

        if($result>0)
        {
            header('Location:signin.php');
        }
        else{
            header('Location:signup.php');
        }

    }



    if(isset($_POST['save_btn']))
    {
        $medicinename = $_POST['medicinename'];
        $quantity = $_POST['qnty'];
        $price = $_POST['price'];

        $il = $_FILES['medicineimage']['name'];
        $path = 'MedicineImage/'.time().".".$il;
        $t = $_FILES['medicineimage']['tmp_name'];
        move_uploaded_file($t, $path);

        $query = "INSERT INTO product (medicinename,qnty,price,medicineimage) VALUES('".$medicinename."','".$quantity."','".$price."','".$path."')";

        
        $result = mysqli_query($conn, $query);

        if($result>0)
        {
            header('Location:home.php');
        }
        else{
            header('Location:product.php');
        }

    }



    if(isset($_POST['update_btn']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];        
        $password = $_POST['password'];
        $number = $_POST['number'];
        $gender = $_POST['gender'];

        $il = $_FILES['image']['name'];
        $path = 'user_images/'.time().".".$il;
        $t = $_FILES['image']['tmp_name'];
        $file_size =  $_FILES['image']['size'];

        // $query = "INSERT INTO user (name,address,email,password,number,gender,image) VALUES('".$name."','".$address."','".$email."','".$password."','".$number."','".$gender."','".$path."')";

        if($file_size > 0)
        {
            move_uploaded_file($t, $path);
            $query = "UPDATE user SET name='$name', address='$address', email='$email', password=' $password', number='$number', gender='$gender', image='$path' WHERE id='$id'";
        }
        else
        {
            $query = "UPDATE user SET name='$name', address='$address', email='$email', password=' $password', number='$number', gender='$gender' WHERE id='$id'";
        }
        
        $result = mysqli_query($conn, $query);

        if($result)
        {
            $_SESSION['status']= "Update Successfully";
            header('Location:dashboard.php');
        }
        else{
            $_SESSION['status']= "Update UnSuccessfully";
            header('Location:edit.php');
        }

    }

?>