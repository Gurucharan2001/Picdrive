<?php
    require("database.php");
    $username = base64_decode($_POST["username"]);
    $password = md5(base64_decode($_POST["password"]));
    $match = "SELECT username FROM users WHERE username = '$username'";
    $res = $db->query($match);
    if($res->num_rows != 0)
    {
        $check_pass = "SELECT username,password FROM users WHERE username = '$username' AND password = '$password'";
        $res_pass = $db->query($check_pass);
        if($res_pass->num_rows != 0)
        {
            $check_status = "SELECT status FROM users WHERE username = '$username' AND password = '$password' AND status = 'active'";
            $res_status = $db->query($check_status);
            if($res_status->num_rows != 0)
            {
                echo "Login Success";
            }
            else{
                $get_code = "SELECT activation_code FROM users WHERE username = '$username' AND password = '$password'";
                $get_response = $db->query($get_code);
                $data = $get_response->fatch_assoc();
                $final_code = $data['activation_code'];
                $check_mail = mail($username,"Picdrive activation code","Thank you for choosing our product.Your Activation Code is:".$final_code);
                if($check_mail == true)
                {
                    //due.....
                }
            }
        }
        else{
            echo "Wrong Password";
        }
    }
    else{
        echo "User Not Found";
    }
?>