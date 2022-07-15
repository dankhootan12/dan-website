<?php

    include "dbcon.php";

    if(isset($_GET['username'])) {
        $username = $_GET['username'];
        $password = $_GET['password'];

        $sql = mysqli_query($con, "SELECT user_id FROM user WHERE username = '$username' AND `password` = '$password'");
        $count = mysqli_num_rows($sql);

        if ($count == 0) {
            echo "Username and password does not match";
        } else {
            session_start();
            $_SESSION['user'] = $username;
            echo "Welcome!";
        }
    }

?>