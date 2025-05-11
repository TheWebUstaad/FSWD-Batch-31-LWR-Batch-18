<?php
    include_once 'header.php';
    include_once 'actions/conn.php';
    $id = $_GET['id'];
    $post = $conn->query("SELECT * FROM posts WHERE id = $id")->fetch_assoc();

?>

<!-- Page Content -->
<div class="container mt-4">
  <h2>Edit Post</h2>
  <?php
    if(isset($_GET['msg'])) { ?>
        <div class="alert alert-warning" role="alert">
         <?php echo $_GET['msg'] ;?>
        </div>
    <?php 
    }
  
  ?>
  <form action="actions/edit_post_action.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <input type="text" name="id" value="<?php echo $post['id'] ?>" hidden>
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="<?php echo $post['title'] ?>" required>
    </div>

    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" id="content" name="content" rows="5" required> <?php echo $post['content'] ?></textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Current Image</label>
        <img src="uploads/<?php echo $post['image'] ?>" alt="Image 1" class="img-thumbnail" style="width: 150px;">
    </div>
    <div class="mb-3">   
      <label for="image" class="form-label">Upload Image</label>
      <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    <button type="submit" class="btn btn-primary">Submit Post</button>
  </form>
</div>

<?php
    include_once 'footer.php';
?>
