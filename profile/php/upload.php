<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $upload_img = $_FILES["data"];
        // echo $upload_img["name"];
        // echo "<br />";
        // echo $upload_img["type"];
        $location = $upload_img["tmp_name"];
        $name = $upload_img["name"];
        move_uploaded_file($location,"../../".$name);
        echo "success";
    }
?>