<?php

if(isset($_POST['save']))
{
    include "config.php";

    $fullName = $_POST['fullname']; 
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    
    if(empty($fullName)  || empty($email) || empty($mobile) || empty($message))
    {
        header("Location: http://localhost/Myportfolio/contact.php?error"); 
    }
    else
    {
        $sql = "INSERT INTO contact (name, email, mobile, message) VALUES ('{$fullName}','{$email}','{$mobile}','{$message}')";
        $result = mysqli_query($conn, $sql);
    
        if($result)
        {
            header("Location: http://localhost/Myportfolio/contact.php?success");
        }
    }

   
}

?>