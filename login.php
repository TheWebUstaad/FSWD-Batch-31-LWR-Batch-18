<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .login-container {
      max-width: 400px;
      margin: 80px auto;
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
        if (isset($_GET['email'])) {

            $userEmail = "abdullah@gmail.com";
            $password  = "12345";

            $userinputEmail    = $_GET['email'];
            $userinputPassword = $_GET['password'];

            if ($userEmail == $userinputEmail && $password == $userinputPassword) {
                header("Location: dashboard.php?name=$userinputEmail");
            } else {
                echo "Invalid email or password";
            }
        }

        // if($userEmail == $userinputEmail){
        //     echo "Welcome back $userinputEmail";
        // }else{
        //     echo "Invalid email or password";
        // }

        // if($password == $userinputPassword){
        //     echo "Welcome back $userinputEmail";
        // }else{
        //     echo "Invalid email or password";
        // }

    ?>
  <div class="login-container">
    <div class="text-center mb-4">
      <h2 class="form-title">Welcome Back</h2>
      <p class="text-muted">Login to your account</p>
    </div>
    <form  method="get">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required />
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember" />
        <label class="form-check-label" for="remember">Remember me</label>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
    <p class="mt-3 text-center">
      Don't have an account? <a href="/register">Register</a>
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
