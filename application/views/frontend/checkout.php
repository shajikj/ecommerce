<div class="container mt-5">
  <h2 class="mb-4 text-center">Checkout</h2>

  <form method="post" action="<?php echo base_url('home/place_order'); ?>">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="mb-3">
          <label>Full Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Phone</label>
          <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mt-4 text-center">
          <button type="submit" class="btn btn-success">Place Order</button>
          <a href="<?php echo base_url('home/cart'); ?>" class="btn btn-secondary">Back to Cart</a>
        </div>
      </div>
    </div>
  </form>
</div>
