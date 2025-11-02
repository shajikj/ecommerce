<!DOCTYPE html>
<html>
<head>
    <title>My Ecommerce Site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<link rel="stylesheet" href="">
<body>

<div class="container mt-4">
 <header>
        <div class="container">
            <div class="header-top">
                <a href="#" class="logo">Shop<span>Easy</span></a>
                
                <div class="search-bar">
                    <input type="text" placeholder="Search for products...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                
                <div class="header-actions">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span>Account</span>
                    </a>
                    <a href="#" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Cart</span>
                        <span class="cart-count">3</span>
                    </a>
                </div>
                
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            
            <nav>
                <ul class="nav-links">
                    <li><a class="nav-link" href="<?php echo base_url('home'); ?>">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('cart'); ?>">Cart</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Blog</a></li>
                   <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
