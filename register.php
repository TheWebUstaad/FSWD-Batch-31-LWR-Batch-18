<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .register-container {
      max-width: 450px;
      margin: 60px auto;
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
      padding: 30px;
    }
    .form-title {
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 20px;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #0d6efd;
    }
    .btn-primary {
      width: 100%;
      border-radius: 8px;
    }
  </style>
</head>
<body>
    <?php 
    if(isset($_GET['myname'])){

        $name = $_GET['myname'];
        $email = $_GET['myemail'];
        $password =  $_GET['mypassword'];
        $confirm_password = $_GET['myconfirm_password'];
        
        echo $name;
        echo $email;
        echo $password;
        echo $confirm_password;
        

    }
    

   
    ?>

  <div class="register-container">
    <div class="text-center mb-4">
      <h2 class="form-title">Create Account</h2>

      <?php if(isset($_GET['myname'])){  ?>


            <p class="alert alert-success"><?php echo "your Account created " . $name . " please login" ;?></p>

        <?php  } ?>

     




      <p class="text-muted">Please fill in this form to register</p>
    </div>
    <form method="get" >
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="myname" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="myemail" required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="mypassword" required />
      </div>
      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="myconfirm_password" required />
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
    <p class="mt-3 text-center">
      Already have an account? <a href="/login">Login</a>
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
