<?php

    $servername = "localhost";
    $username ="root";
    $password ="root";
    $databasename = "medicine";

    $conn = mysqli_connect($servername,$username,$password,$databasename);

    if($conn){
        echo "";
    }
    else{
        echo "Connection Unsuccessfull..";
    }

?>