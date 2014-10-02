<?php
    $mysqli = new mysqli("localhost","root","123456","AndroidApp");
    if ($mysqli->connect_errno)
    {
        echo "error";
    }
    else
    {
        echo "connected<br />";
        $q = "CREATE USER '" . $_POST["username"] . "' IDENTIFIED BY '" . $_POST["password"] . "'";
        echo $q . "<br />";
        if ($mysqli->query($q) &&
            $mysqli->query("GRANT SELECT ON AndroidApp.* TO '" . $_POST["username"] . "'"))
        {
            echo "create user success!";
        }
        else
        {
            echo $mysqli->errno . $mysqli->error;
        }
    }
    $mysqli->close;
?>
