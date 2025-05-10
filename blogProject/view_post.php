<?php
include_once 'header.php';
include_once 'actions/conn.php';

$result = $conn->query("SELECT * FROM posts WHERE id = " . $_GET['id']);
?>

<!-- Page Content -->
<div class="container my-5">
  <div class="row">
    <div class="col-12">
      <?php 
      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
      ?>
        <img src="uploads/<?php echo $row['image']; ?>" width="200px" class="img-fluid mb-4" alt="Post Image">

        <h2><?php echo htmlspecialchars($row['title']); ?></h2>
        <p class="text-muted"><?php echo date('F j, Y', strtotime($row['create_at'])); ?></p>
        <hr>
        <p style="white-space: pre-line;"><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>

        <a href="javascript:history.back()" class="btn btn-secondary mt-4">← Back</a>
      <?php 
      } else {
          echo "<p class='text-center'>Post not found.</p>";
      }
      ?>
    </div>
  </div>
</div>

<?php include_once 'footer.php'; ?>
