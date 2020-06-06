
<html>
<body>

<table border="1">
    <tr>
        <th>STT</th>
        <th>ProductName</th>
        <th>Price</th>
        <th>Description</th>
        <th>Vendor</th>
    </tr>
    <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $product['ProductName'] ?></td>
            <td><?php echo $product['Price'] ?></td>
            <td><?php echo $product['Description'] ?></td>
            <td><?php echo $product['Vendor'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

