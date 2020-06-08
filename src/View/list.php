<html>
<head>

</head>
<body>

<table class="table table-hover">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>ProductName</th>
        <th>Price</th>
        <th>Description</th>
        <th colspan="3">Vendor</th>
    </tr>
    </thead>
    <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $product['ProductName'] ?></td>
            <td><?php echo $product['Price'] ?></td>
            <td><?php echo $product['Description'] ?></td>
            <td><?php echo $product['Vendor'] ?></td>
            <td><a href="index.php?page=delete&id=<?php echo $product['Id'] ?>" class="btn btn-primary">delete</a></td>
            <td><a href="index.php?page=update&id=<?php echo $product['Id'] ?>" class="btn btn-primary">update</a></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <th colspan="7"><?php if(empty($products)) echo "No Data"?></th>
    </tr>
</table>
</body>
</html>
