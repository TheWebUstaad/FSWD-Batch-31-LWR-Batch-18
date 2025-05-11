<?php 
include_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate ID
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    if ($id <= 0) {
        header("Location: ../all_post.php?error=Invalid post ID.");
        exit;
    }

    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $image_name = ''; // Default to empty

    // Get current image name from database
    $result = mysqli_query($conn, "SELECT image FROM posts WHERE id = $id");
    if (!$result || mysqli_num_rows($result) === 0) {
        header("Location: ../all_post.php?error=Post not found.");
        exit;
    }
    $row = mysqli_fetch_assoc($result);
    $current_image = $row['image'];

    // Check if new image was uploaded
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "../uploads/";
        $image_name = time() . "_" . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ["jpg", "jpeg", "png", "gif"];

        if (in_array($imageFileType, $allowed_types)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // Optional: Delete the old image file if desired
                if (!empty($current_image) && file_exists($target_dir . $current_image)) {
                    unlink($target_dir . $current_image);
                }
            } else {
                header("Location: ../create_post.php?msg=Failed to upload new image.");
                exit;
            }
        } else {
            header("Location: ../create_post.php?msg=Invalid file type. Only JPG, JPEG, PNG & GIF are allowed.");
            exit;
        }
    } else {
        // Keep current image if no new file was uploaded
        $image_name = $current_image;
    }

    // Update query
    $sql = "UPDATE posts SET title = '$title', content = '$content', image = '$image_name' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../all_post.php?msg=Post updated successfully.");
    } else {
        header("Location: ../all_post.php?error=Error updating post.");
    }
    exit;
}
?>
