<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard - My E-Commerce</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('admin'); ?>">🛍️ Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="<?php echo base_url('admin/orders'); ?>" class="nav-link">Orders</a></li>
        <li class="nav-item"><a href="<?php echo base_url('admin/products'); ?>" class="nav-link">Products</a></li>
        <li class="nav-item"><a href="<?php echo base_url(); ?>" class="nav-link">View Site</a></li>
        <li class="nav-item"><a href="<?php echo base_url('adminlogin/logout'); ?>" class="nav-link text-danger">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
