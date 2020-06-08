<html>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #4CAF50;
        color: white;
    }
</style>
<body>

<table>
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
            <td><a href="index.php?page=delete&id=<?php echo $product['Id'] ?>">delete</a></td>
            <td><a href="index.php?page=update&id=<?php echo $product['Id'] ?>">update</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
