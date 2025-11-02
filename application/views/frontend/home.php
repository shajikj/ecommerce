<link rel="stylesheet" href="assets/style/style.css">
<script src="assets/js/script.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<section class="slider">
  <div class="slide active"
    style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('assets/images/slider1.jpg');">
    <div class="slide-content">
      <h2>Summer Collection 2023</h2>
      <p>Discover the latest trends in fashion with up to 50% off on selected items.</p>
      <a href="#" class="btn">Shop Now</a>
    </div>
  </div>

  <div class="slide"
    style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('assets/images/slider2.jpg');">
    <div class="slide-content">
      <h2>Electronics Sale</h2>
      <p>Get the latest gadgets and electronics with amazing discounts.</p>
      <a href="#" class="btn">Explore Deals</a>
    </div>
  </div>

  <div class="slide"
    style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('assets/images/slider3.jpg');">
    <div class="slide-content">
      <h2>Home & Living</h2>
      <p>Refresh your space with our beautiful home decor collection.</p>
      <a href="#" class="btn">Discover More</a>
    </div>
  </div>

  <div class="slider-controls">
    <div class="slider-dot active"></div>
    <div class="slider-dot"></div>
    <div class="slider-dot"></div>
  </div>
</section>


<section class="container-fluid">
  <h2 class="section-title">Shop By Category</h2>
  <div class="categories">
    <div class="category">
      <div class="category-icon">
        <i class="fas fa-tshirt"></i>
      </div>
      <h3>Fashion</h3>
      <p>Latest trends in clothing</p>
    </div>

    <div class="category">
      <div class="category-icon">
        <i class="fas fa-laptop"></i>
      </div>
      <h3>Electronics</h3>
      <p>Gadgets & devices</p>
    </div>

    <div class="category">
      <div class="category-icon">
        <i class="fas fa-home"></i>
      </div>
      <h3>Home & Garden</h3>
      <p>Furniture & decor</p>
    </div>

    <div class="category">
      <div class="category-icon">
        <i class="fas fa-heartbeat"></i>
      </div>
      <h3>Health & Beauty</h3>
      <p>Skincare & wellness</p>
    </div>
  </div>
</section>



<section class="container-fluid">
  <h2 class="section-title">Featured Products</h2>
  <div class="products row">
    <?php if (!empty($products)): ?>
      <?php foreach ($products as $p): ?>
        <div class="col-md-3 col-sm-6 mb-4">
          <div class="product">
            <div class="product-img" style="background-image: url('<?php echo base_url($p['image']); ?>');">
            </div>
            <div class="product-info text-center">
              <h3 class="product-title"><?php echo $p['name']; ?></h3>
              <div class="product-price">₹<?php echo $p['price']; ?></div>
              <div class="product-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="product-actions">
                <a href="<?php echo base_url('home/add_to_cart/' . $p['id']); ?>" class="add-to-cart">Add to Cart</a>
                <a href="<?php echo base_url('home/product/' . $p['id']); ?>" class="wishlist">
                  <i class="far fa-heart"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-center">No products available yet.</p>
    <?php endif; ?>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>