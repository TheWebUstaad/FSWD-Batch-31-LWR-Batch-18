<?php
session_start();

if(!isset($_SESSION['id'])) {

  header("Location: login.php?msg=Please login first");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  
  <style>
    body {
      overflow-x: hidden;
    }
    .sidebar {
      height: 100vh;
      position: fixed;
      width: 240px;
      background-color: #343a40;
      color: white;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      padding: 15px;
      display: block;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 240px;
      padding: 20px;
    }
    .topbar {
      position: sticky;
      top: 0;
      z-index: 1030;
      background-color: white;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column p-3">
  <h4 class="text-white mb-4"><i class="fas fa-user-shield me-2"></i>Admin</h4>
  <a href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
  <a href="create_post.php"><i class="fas fa-plus-circle me-2"></i>Create Post</a>
  <a href="all_post.php"><i class="fas fa-file-alt me-2"></i>Posts</a>
  <a href="#"><i class="fas fa-users me-2"></i>Users</a>
  <a href="#"><i class="fas fa-cogs me-2"></i>Settings</a>
  <a href="#"><i class="fas fa-chart-bar me-2"></i>Reports</a>
  <a href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
</div>
  <!-- Main Content -->
  <div class="content">
    <!-- Topbar -->
    <nav class="navbar topbar navbar-expand-lg navbar-light bg-light px-3">
      <a class="navbar-brand" href="#">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topbarNav">
        <form class="d-flex ms-auto">
          <input class="form-control me-2" type="search" placeholder="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ms-3">
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
        </ul>
      </div>
    </nav>