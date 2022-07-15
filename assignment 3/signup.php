<?php

    include "dbcon.php";

    if(isset($_GET['fname'])) {
        $fname = $_GET['fname'];
        $email = $_GET['email'];
        $Dob = $_GET['Dob'];
        $phoneNumber = $_GET['phoneNumber'];
        $Username = $_GET['username'];
        $password = $_GET['password'];

        $sql = mysqli_query($con, "INSERT INTO user (`fname`, `dob`, `email`, `telno`, `username`, `password`) VALUES ('$fname', '$Dob', '$email', '$phoneNumber', '$Username', '$password')");

        if (!$sql) {
            echo "Failed";
        } else {
            echo "Successfully registered";
        }
    }

?>