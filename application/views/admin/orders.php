<div class="container mt-5">
  <h2 class="mb-4 text-center">All Orders</h2>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Customer</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Total (₹)</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($orders as $order): ?>
      <tr>
        <td><?php echo $order['id']; ?></td>
        <td><?php echo $order['customer_name']; ?></td>
        <td><?php echo $order['customer_email']; ?></td>
        <td><?php echo $order['customer_phone']; ?></td>
        <td><?php echo $order['total']; ?></td>
        <td><?php echo $order['created_at']; ?></td>
        <td>
          <a href="<?php echo base_url('admin/order_details/'.$order['id']); ?>" class="btn btn-sm btn-primary">View</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
