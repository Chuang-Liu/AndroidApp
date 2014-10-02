<?php
    $mysqli = new mysqli("localhost",$_POST["username"],$_POST["password"],"information_schema");
    if ($mysqli->connect_errno)
    {
        echo "Failed to connect to MySQL";
    }
    echo $mysqli->host_info
?>
