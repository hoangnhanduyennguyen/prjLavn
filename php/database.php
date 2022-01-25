<?php
    $conn = mysqli_connect("localhost","root","","lavn");
    if (!$conn){
        echo "Database connected " . mysqli_connect_error(); //an error message appears if there is an error
    }
?>