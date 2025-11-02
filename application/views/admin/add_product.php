<div class="container mt-4">
  <h2>Add Product</h2>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Price</label>
      <input type="number" name="price" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Image</label>
      <input type="file" name="image" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Add Product</button>
  </form>
</div>
