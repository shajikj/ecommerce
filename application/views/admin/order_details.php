<div class="container mt-5">
  <h2 class="mb-4 text-center">Order #<?php echo $order['id']; ?></h2>

  <div class="card mb-4">
    <div class="card-body">
      <h5>Customer Information</h5>
      <p><strong>Name:</strong> <?php echo $order['customer_name']; ?></p>
      <p><strong>Email:</strong> <?php echo $order['customer_email']; ?></p>
      <p><strong>Phone:</strong> <?php echo $order['customer_phone']; ?></p>
      <p><strong>Total:</strong> ₹<?php echo $order['total']; ?></p>
      <p><strong>Date:</strong> <?php echo $order['created_at']; ?></p>
    </div>
  </div>

  <h5>Ordered Items</h5>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>Product</th>
        <th>Qty</th>
        <th>Price (₹)</th>
        <th>Subtotal (₹)</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($items as $item): ?>
      <tr>
        <td><?php echo $item['product_name']; ?></td>
        <td><?php echo $item['quantity']; ?></td>
        <td><?php echo $item['price']; ?></td>
        <td><?php echo $item['subtotal']; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <div class="text-center mt-4">
    <a href="<?php echo base_url('admin/orders'); ?>" class="btn btn-secondary">Back to Orders</a>
  </div>
</div>
