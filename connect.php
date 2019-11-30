<?php
    //Connect Server
    $conn = new mysqli("localhost","root","12345678","jojo");
    if($conn->connect_errno){
        die("Connection failed:" .$conn->connect_error);
    }
?>