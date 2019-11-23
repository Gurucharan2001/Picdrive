<?php
    require("database.php");
    $code = base64_decode($_POST["code"]);
    $username = base64_decode($_POST["username"]);
    $check = "SELECT activation_code FROM users WHERE username = '$username'";
    $response = $db->query($check);
    if($response->num_rows != 0)
    {
        $update_status = "UPDATE users SET status = 'active' WHERE username = '$username' AND activation_code = '$code'";
        if($db->query($update_status) == true)
        {
            $get_id = "SELECT id FROM users WHERE username = '$username'";
            $get_id_res = $db->query($get_id);
            $id_data = $get_id_res->fatch_assoc();
            $table_name = "User_".$id_data['id'];
            $create_table = "CREATE TABLE $table_name(
                id INT(10) NOT NULL AUTO_INCREMENT,
                image_name VARCHAR(100),
                image_path VARCHAR(100),
                image_size FLOAT(10),
                image_date DATE DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY(id)
            )";
            if($db->query($create_table) == true){
                echo "user varified";
                session_start();
                $_SESSION['username'] = $username;
            }
        }
        else{
            echo "user not found";
        }
    }
    else{
        echo "Code not matched";
    }
?>