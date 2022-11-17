<?php
require ("connection.php");

session_start();

if(isset($_POST['login_btn']))
{
    $email =$_POST['email'];
    $password =$_POST['password'];
    

    if($email != "" && $password != "")
    {
        // echo "$query";
        $query ="SELECT * FROM user WHERE email='".$email."' and password='".$password."'";
        
        $data = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($data);

        if($row>0)
        {
            // $_SESSION['email']=$email;
            $_SESSION['status']= "Login Successfully";
            header('Location:dashboard.php');
        }
        else
        {
            $_SESSION['status']= "Login UnSuccessfully";
            header('Location:signin.php');
        }
    }
}


?>