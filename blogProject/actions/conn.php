<?php 



$conn = new mysqli("localhost","root", "", "blog-fswd-batch-31+lwr-batch-18");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";

}

// $name  = "bilal";
// $email = "bilal@gmail.com";
// $password = password_hash("bilal123", PASSWORD_DEFAULT);

// $stmt = $conn->prepare("INSERT INTO users (name,email,password) VALUES (?,?,?)");

// $stmt->bind_param("sss", $name, $email, $password);

// $stmt->execute();
// echo "New record created successfully";



?>