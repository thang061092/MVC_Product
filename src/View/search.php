
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
    <tr>
        <th colspan="7"><?php if(empty($products)) echo "No Data"?></th>
    </tr>
</table>
</body>
</html>

