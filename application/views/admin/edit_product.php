<div class="container mt-4">
  <h2>Edit Product</h2>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" required>
    </div>
    <div class="mb-3">
      <label>Price</label>
      <input type="number" name="price" class="form-control" value="<?php echo $product['price']; ?>" required>
    </div>
    <div class="mb-3">
      <label>Current Image</label><br>
      <img src="<?php echo base_url($product['image']); ?>" width="100"><br><br>
      <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
