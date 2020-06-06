<h4>Ban muon xoa san pham nay?</h4>
<input type="text" value="<?php echo $product['ProductName']; ?>" disabled>
<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $product['Id']; ?>">
    <button type="submit">Delete</button>
</form>