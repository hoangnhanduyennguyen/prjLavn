<?php
    session_start();
    include_once "database.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $name = $fname . " " . $lname;
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $passwordCF = mysqli_real_escape_string($conn, $_POST['passwordCF']);

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($password) && !empty($passwordCF)) {
        //check user email is valid or not
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //is email is valid
            //check if that email already exist in the database 
            $sql = mysqli_query($conn, "SELECT email FROM customer WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0){
                echo "An account has been created with this email.";
            }else{
                //eliminate every char except 0-9
                $justNums = preg_replace("/[^0-9]/", '', $phone);
                //eliminate leading 1 if its there
                if (strlen($justNums) == 11) $justNums = preg_replace("/^1/", '',$justNums);

                if(strlen($justNums) === 10) {
                    if ($password === $passwordCF){
                        $status = "Active now"; //once user signed up succesffully, the status will be active now
                        $random_id = rand(time(),10000000);//create randome id for user
                        //insert all user data inside table users
                        $sql2 = mysqli_query($conn, "INSERT INTO customer (email, customer_name, customer_id, phone_number, password, status)
                        VALUES ('{$email}','{$name}',{$random_id},'{$phone}','{$password}','{$status}')");
    
                        if ($sql2){//if these data is inserted
                            $sql3 = mysqli_query($conn,"SELECT * FROM customer WHERE email = '{$email}'");
                            if (mysqli_num_rows($sql3) > 0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['customer_id'] = $row['customer_id']; //using this session we use user unique_id in other php file
                                echo "success";
                            }  
                        }else{
                            echo "Something went wrong while inserting a new user!";
                        }
                    }else{
                        echo "Your passwords do not match!";
                    }
                }else{
                    echo "Please enter a valid phone number!";
                }    
            }
        }else{
            echo "Please enter a valid email!";
        }
    } else {
        echo "All input field are required!";
    }
?>