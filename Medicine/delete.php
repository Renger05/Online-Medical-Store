<?php
    require ("connection.php");
?>

<?php
    session_start();

    $id = $_REQUEST['id'];

    $query = "DELETE FROM user WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        $_SESSION['status'] = "Delete Data Sucessfully";
        header('location:dashboard.php');
    }
    else
    {
        $_SESSION['status'] = "Delete Data UnSucessfully";
        header('location:dashboard.php');
    }


?>
