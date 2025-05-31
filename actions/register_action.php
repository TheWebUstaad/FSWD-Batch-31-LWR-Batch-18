<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $name = trim($_POST['myname']);
        $email = trim($_POST['myemail']);
        $password =  $_POST['mypassword'];
        $confirm_password = $_POST['myconfirm_password'];
        
        echo strlen($name);
        // echo $email;
        // echo $password;
        // echo $confirm_password;

        $registerEmails = ["test@gmail.com", "abdullah@gmail.com", "ali@gmail.com", "bilal@gmail.com", "test123@gmail.com"];

        if(empty($name) || empty($email) || empty($password) || empty($confirm_password)){
            echo "Please fill all fields";
        }else if(empty($name) || strlen($name) < 3){
            echo "Please enter a valid name";

        }else if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Please enter a valid email";
        }else if(in_array($email, $registerEmails)){
            echo "Email already exists";
        }else if(empty($password) || strlen($password) < 6){
            echo "Please enter a valid password";
        }else if((!preg_match("/[0-9]/", $password) == 0) && (!preg_match("/[a-zA-Z]/", $password) == 0)){
            echo "Password must contain at least one letter and one number";    
            echo "Password must contain at least one number";
        }

        
    }


   
    ?>