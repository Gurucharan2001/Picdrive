<?php
    require("database.php");
    $fullname = base64_decode($_POST["fullname"]);
    $username = base64_decode($_POST["username"]);
    $password = md5(base64_decode($_POST["password"]));
    $pattern = "1234567890";
    $len = strlen($pattern)-1;
    $i;
    $code = [];
    for($i=0;$i<4;$i++)
    {
        $index_number = rand(0,$len);
        $code[] = $pattern[$index_number];
    }
    $activation_code = implode($code);
    $store_data = "INSERT INTO users(full_name,username,password,activation_code) 
    VALUES('$fullname','$username','$password','$activation_code')
    ";
    if($db->query($store_data))
    {
        $mail_varify = mail($username,"Picdrive activation code","Thank you to join with us Your activation code is:".$activation_code);
        if($mail_varify == true)
        {
            echo "Signup Success";
        }
        else{
            echo "Signup Failed";
        }
    }
    else{
        echo "signup failed";
    }

?>