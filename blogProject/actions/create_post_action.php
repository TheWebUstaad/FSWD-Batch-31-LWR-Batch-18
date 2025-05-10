<?php

echo "<pre>";
print_r($_POST);

print_r($_FILES);

include_once 'conn.php';

$msg = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);

    $image_name = "";

    if($_FILES['image']['name']){
        $target_dir = "../uploads/";   // Directory where the image will be uploaded
        $image_name = time()."_".basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ["jpg", "png", "jpeg", "gif"];

        if(in_array($imageFileType, $allowed_types)){
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        }else{
            $msg = "Invalid file type. Only JPG, JPEG, PNG & GIF files are allowed.";
            header("Location: ../create_post.php?msg=$msg");
            exit;
        }

        // echo $imageFileType;

        $sql = "INSERT INTO posts(title, content, image) values(?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $title, $content, $image_name);
        if($stmt->execute()){
            $msg = "Post created successfully.";
            header("Location: ../all_post.php?msg=$msg");
            exit;
        }else{
            $msg = "Error creating post.";
            header("Location: ../all_post.php?error=$msg");
            exit;
        }

    }

    
}


?>