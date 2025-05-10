<?php
include_once 'conn.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $myemail = "abdullah@gmail.com";
   
    if(empty($email) || empty($password)){
        $msg =  "Please fill all fields";
        header("Location: ../login.php?msg=$msg");
        exit;
    }else{
            // $sql = "SELECT * FROM users";
            // $result = mysqli_query($conn, $sql);
            // print_r($result);
            // echo "<pre>";
            // $data = mysqli_fetch_assoc($result);
            // print_r($data);


        $stmt = $conn->prepare("SELECT id , name , password  FROM users where u_email = ?" );
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        echo "<pre>";
   
            if($stmt->num_rows == 1){
                echo "User found";
                $stmt->bind_result($id, $name, $hashed_password);
                $stmt->fetch();
                if(password_verify($password,$hashed_password)){
                
                    $_SESSION['id'] = $id;
                    $_SESSION['name'] = $name;
                    header("Location: ../Dashboard.php");
                }else{
                    $msg =  "Password not matched";
                    header("Location: ../login.php?msg=$msg");
                    exit;
                }
            } else{
                $msg =  "User not found";
                header("Location: ../login.php?msg=$msg");
                exit;
            }
    }
}




?>