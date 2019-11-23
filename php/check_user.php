<?php
    require("database.php");
    $username = bash64_decode($_POST["username"]);
    $check = "SELECT username FROM users WHERE username = '$username'";
    $response = $db->query($check);
    if($response->num_rows != 0)
    {
        echo "User found";
    }
    else{
        echo "user not found";
    }

?>