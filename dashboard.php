<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f1f4f9;
    }

    .sidebar {
      height: 100vh;
      background-color: #343a40;
      padding-top: 20px;
    }

    .sidebar a {
      color: #adb5bd;
      text-decoration: none;
      padding: 12px 20px;
      display: block;
      border-left: 4px solid transparent;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #495057;
      color: #fff;
      border-left: 4px solid #0d6efd;
    }

    .topbar {
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
      padding: 10px 20px;
    }

    .content {
      padding: 30px;
    }

    @media (max-width: 768px) {
      .sidebar {
        position: fixed;
        left: -250px;
        width: 250px;
        transition: all 0.3s;
      }

      .sidebar.active {
        left: 0;
      }

      .toggle-sidebar {
        display: inline-block;
      }
    }

    @media (min-width: 769px) {
      .toggle-sidebar {
        display: none;
      }
    }
  </style>
</head>
<body>

  <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar bg-dark text-white" id="sidebar">
      <h5 class="text-center text-white mb-4">Admin Panel</h5>
      <a href="#" class="active">Dashboard</a>
      <a href="#">Users</a>
      <a href="#">Settings</a>
      <a href="#">Reports</a>
      <a href="#">Logout</a>
    </div>

    <!-- Main content -->
    <div class="flex-grow-1">
      <!-- Topbar -->
      <div class="topbar d-flex justify-content-between align-items-center">
        <button class="btn btn-outline-secondary toggle-sidebar" onclick="toggleSidebar()">☰</button>
        <div class="d-flex align-items-center">
          <span class="me-3">Hello, Admin</span>
          <img src="https://via.placeholder.com/35" class="rounded-circle" alt="User" />
        </div>
      </div>

      <!-- Page Content -->
      <div class="content">
        <h2>Dashboard</h2>
        <p>weclome <?php echo $_GET['name'] ?></p>
        <!-- Add dashboard widgets or tables here -->
      </div>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('active');
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
