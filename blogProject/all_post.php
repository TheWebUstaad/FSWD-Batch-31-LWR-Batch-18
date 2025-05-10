<?php
    include_once 'header.php';
    include_once 'actions/conn.php';
  $result = $conn->query("SELECT * FROM posts");
?>


    <!-- Page Content -->
    <class="mt-4">
      <h2>Post Records</h2>
      <?php if(isset($_GET['msg'])){
        if($_GET['msg'] == "Post created successfully."){
          echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
        }
      }
      if(isset($_GET['error'])){
        echo "<div class='alert alert-danger'>".$_GET['error']."</div>";
      }
      ?>
      <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Posted_At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><img src="uploads/<?php echo $row['image'] ?>" alt="Image 1" class="img-thumbnail" style="width: 80px;"></td>
        <td> <?php echo $row['create_at'] ?> </td>
        <td>
          <a href="view_post.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">View</a>
          <button class="btn btn-primary btn-sm">Edit</button>
          <a href="actions/delete_post.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      <?php
        }
      } ?>
    </tbody>
  </table>
    </div>


    <?php

    include_once 'footer.php';
    ?>