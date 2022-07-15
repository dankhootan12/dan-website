<?php

    include "dbcon.php";

    if(isset($_GET['name'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        $telno = $_GET['telno'];
        $feedback = $_GET['feedback'];

        $sql = mysqli_query($con, "INSERT INTO feedback (fname, age, email, telno, feedback) VALUES ('$name', '$age', '$email', '$telno', '$feedback')");

        if (!$sql) {
            echo "Failed";
        } else {
            echo "Successfully sent feedback";
        }
    }

?>