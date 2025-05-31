<?php
    include_once 'header.php';
    include_once 'actions/conn.php';
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);


?>


    <!-- Page Content -->
    <div class="mt-4">
      <h2>User List</h2>
      <table class="table table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- Dummy row -->
       <?php foreach($result as $users){ ?>
      <tr>
        <td><?php echo $users['id'] ?></td>
        <td> <?php echo $users['name'] ?> </td>
        <td> <?php echo $users['u_email'] ?></td>
        <td>
          <a href="actions/delete_user.php?id=<?php echo $users['id']?>"   class="btn btn-primary btn-sm">Edit</a>
          <button class="btn btn-danger btn-sm">Delete</button>
        </td>
      </tr>
     <?php } ?>
    </tbody>
  </table>
    </div>


    <?php

    include_once 'footer.php';
    ?>