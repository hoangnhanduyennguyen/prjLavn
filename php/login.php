<?php
    session_start();
    include_once "database.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($email) && !empty($password)){
        //check users entered email & password matched to database 
        $sql = mysqli_query($conn, "SELECT * FROM customer WHERE email = '{$email}' AND password = '{$password}'");
        if (mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['customer_id'] = $row['customer_id']; //using this session we use user unique_id in other php file
            echo "success";
        }else{
            echo "Incorrect email or password!";
        }
    }else{
        echo "Please enter all input fields to login!";
    }
?>