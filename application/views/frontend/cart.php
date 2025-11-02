<div class="container mt-5">
    <h2 class="mb-4 text-center">Shopping Cart</h2>

    <?php if ($this->cart->total_items() > 0): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price (₹)</th>
                    <th>Subtotal (₹)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->cart->contents() as $item): ?>
                    <tr>
                        <td>
                            <img src="<?php echo base_url($item['image']); ?>" width="60" class="me-2 rounded">
                            <?php echo $item['name']; ?>
                        </td>
                        <td><?php echo $item['qty']; ?></td>
                        <td><?php echo $item['price']; ?></td>
                        <td><?php echo $item['subtotal']; ?></td>
                        <td>
                            <a href="<?php echo base_url('home/remove/' . $item['rowid']); ?>"
                                class="btn btn-danger btn-sm">Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4 class="text-end">Total: ₹<?php echo $this->cart->total(); ?></h4>
        <div class="text-center mt-4">
            <a href="<?php echo base_url(); ?>" class="btn btn-secondary">Continue Shopping</a>
            <a href="<?php echo base_url('home/checkout'); ?>" class="btn btn-success">Checkout</a>

        </div>

    <?php else: ?>
        <p class="text-center">Your cart is empty.</p>
    <?php endif; ?>
</div>