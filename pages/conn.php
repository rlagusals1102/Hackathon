<?php
    $connect = mysqli_connect("localhost", "root", "", "sdhs");
    if (mysqli_connect_error()) {
        echo "DB Connect error";
    }
?>