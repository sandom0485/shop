<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        include("connect.php");
        //chek if it is oosted back
        if(isset($_POST['submit'])){
            //รับข้อมูล
            $name = $_POST['name'];
            $username = $_POST["Username"];
            $email = $_POST['E-mail'];
            $password =md5($conn->real_escape_string($_POST['Password']));
            $password2 = $_POST['Password'];

        }             
    ?>
</body>
</html>