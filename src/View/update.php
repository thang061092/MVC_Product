<body>
<h3>Cập nhật thông tin sản phẩm</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post">
            <input class="form-control" name="id" disabled type="text" value="<?php echo $product->getId() ?>">

            <label>ProductName:</label>
            <input class="form-control" name="name" type="text" required value="<?php echo $product->getProductName() ?>">

            <label>ProductLine:</label>
            <input class="form-control" name="line" type="text" required readonly value="<?php echo $product->getProductLine() ?>">

            <label>Price:</label>
            <input class="form-control" name="price" type="text" required value="<?php echo $product->getPrice() ?>">

            <label>Quantity:</label>
            <input class="form-control" name="quantity" type="text" required value="<?php echo $product->getQuantity()?>">

            <label>DateCreat:</label>
            <input class="form-control" name="date" type="text" required value="<?php echo $product->getDateCreat() ?>">

            <label>Description:</label>
            <input class="form-control" name="desc" type="text"   value="<?php echo $product->getDescription() ?>">

            <br>
            <button type="submit" class="btn btn-primary">Update</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>
    </div>

</div>
</body>
