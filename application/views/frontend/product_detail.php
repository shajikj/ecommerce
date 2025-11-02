<div class="container mt-5">
  <div class="row">
    <div class="col-md-5">
      <img src="<?php echo base_url($product['image']); ?>" class="img-fluid rounded shadow" alt="<?php echo $product['name']; ?>">
    </div>

    <div class="col-md-7">
      <h2><?php echo $product['name']; ?></h2>
      <h4 class="text-success">₹<?php echo $product['price']; ?></h4>
      <p class="mt-3">
        This is a high-quality product that meets all your needs. 
        You can customize this section to pull a description from the database later.
      </p>
      <a href="<?php echo base_url(); ?>" class="btn btn-secondary mt-3">Back to Products</a>
    </div>
  </div>
</div>
