<?php
    session_start();
    include_once "database.php";
    $email = mysqli_real_escape_string($conn, $_POST['emailAddress']);
    $numOP = mysqli_real_escape_string($conn, $_POST['numberPeople']);
    $phone = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $message = mysqli_real_escape_string($conn, $_POST['specialRequest']);
    str_replace(" People","",$numOP);
    str_replace(" Person","",$numOP);

    if(!empty($email) && !empty($numOP) && !empty($date) && !empty($time) ){
        $sql1 = mysqli_query($conn, "SELECT * FROM booking ORDER BY booking_id DESC LIMIT 1") or die (mysqli_error($conn));
        $row = mysqli_fetch_assoc($sql1);
        if ($row != null){
            $id = $row['booking_id'];
            $id++;
        }else{
            $id = 0;
        }
        //insert all user data inside table users
        $sql2 = mysqli_query($conn, "INSERT INTO booking (booking_id, customer_email, date, time, number_of_people, message)
        VALUES ({$id},'{$email}','$date', '$time', $numOP,'{$message}')");

        if ($sql2){//if these data is inserted
            $sql3 = mysqli_query($conn,"SELECT * FROM booking WHERE booking_id = '{$id}'");
            if (mysqli_num_rows($sql3) > 0){
                $row = mysqli_fetch_assoc($sql3);
                echo json_encode($row);;
            }  
        }else{
            echo mysqli_error($conn);
        }
    }else{
        echo "Please enter all input fields to reserve!";
    }
?>