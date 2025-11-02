<div class="container mt-4">
  <h2 class="mb-4 text-center">All Orders</h2>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Total (₹)</th>
        <th>Order Date</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($orders)): ?>
        <?php foreach ($orders as $order): ?>
          <tr>
            <td><?php echo $order['customer_name']; ?></td>
            <td><?php echo $order['customer_email']; ?></td>
            <td><?php echo $order['customer_phone']; ?></td>
            <td><?php echo $order['total']; ?></td>
            <td><?php echo $order['created_at']; ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="5" class="text-center">No orders found</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
