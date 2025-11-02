<div class="container mt-4">
  <h2 class="mb-4">Products</h2>
  <a href="<?php echo base_url('admin/add_product'); ?>" class="btn btn-primary mb-3">Add Product</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $p): ?>
      <tr>
        <td><?php echo $p['id']; ?></td>
        <td><?php echo $p['name']; ?></td>
        <td>₹<?php echo $p['price']; ?></td>
        <td><img src="<?php echo base_url($p['image']); ?>" width="60"></td>
        <td>
          <a href="<?php echo base_url('admin/edit_product/'.$p['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="<?php echo base_url('admin/delete_product/'.$p['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this product?')">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
