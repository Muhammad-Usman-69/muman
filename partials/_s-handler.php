<?php 
    include("partials/_dbconnect.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["s-name"];
        $email = $_POST["s-email"];
        $pass = $_POST["s-pass"];
        $cpass = $_POST["s-cpass"];
        $exist = false;
        if ($exist == false) {
            if ($pass == $cpass) {
                $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_pass`) VALUES ('$name', '$email', '$pass_hash');";
                header("location: /?you have been signed up");
                exit();
            } else {
                header("location: /?email in use");
                exit();
            }
        } else {
            header("location: /?email in use");
            exit();
        }
    } else {
        header("location: /?unknown error");
        exit();
    }
?>