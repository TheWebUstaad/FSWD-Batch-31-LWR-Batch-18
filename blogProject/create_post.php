<?php
    include_once 'header.php';
?>

<!-- Page Content -->
<div class="container mt-4">
  <h2>Create a New Post</h2>
  <?php
    if(isset($_GET['msg'])) { ?>
        <div class="alert alert-warning" role="alert">
         <?php echo $_GET['msg'] ;?>
        </div>
    <?php 
    }
  
  ?>
  <form action="actions/create_post_action.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Upload Image</label>
      <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit Post</button>
  </form>
</div>

<?php
    include_once 'footer.php';
?>
