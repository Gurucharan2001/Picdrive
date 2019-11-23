<?php
    $db = new mysqli("localhost","root","","wap_picdrive");
    if($db->connect_error)
    {
        die("Connection failed with database");
    }

?>