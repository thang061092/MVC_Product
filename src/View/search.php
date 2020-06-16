<div class="col-12 col-md-12 ">
    <table class="table table-hover table-bordered">
        <thead class="thead-dark table-bordered">
        <tr>
            <th>STT</th>
            <th>ProductName</th>
            <th>ProductLine</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>DateCreat</th>
            <th>Description</th>
        </tr>
        </thead>
        <?php if (empty($products)): ?>
            <tr>
                <th colspan="10">
                    No Data
                </th>
            </tr>
        <?php else: ?>
            <?php foreach ($products as $key => $product): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $product->getProductName() ?></td>
                    <td><?php echo $product->getProductLine() ?></td>
                    <td><?php echo $product->getPrice() ?></td>
                    <td><?php echo $product->getQuantity() ?></td>
                    <td><?php echo $product->getDateCreat() ?></td>
                    <td><?php echo $product->getDescription()?></td>
                </tr>
            <?php endforeach; ?>

        <?php endif; ?>

    </table>
</div>