<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<table class="table">
    <tr>
        <th>STT</th>
        <th>ProductName</th>
        <th>Price</th>
        <th>Description</th>
        <th colspan="3">Vendor</th>



    </tr>
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
