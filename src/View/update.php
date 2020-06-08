<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Cap nhat lai thong tin san pham</h3>
<form method="post" action="./index.php?page=update">
    <input type="hidden" name="id" value="<?php echo $product['Id']; ?>">
    <table class="table col-12 col-md-6">
        <tr>
            <td>Ten San pham</td>
            <td><input type="text" name="name" value="<?php echo $product['ProductName'] ?>" class="col-12"></td>
        </tr>
        <tr>
            <td>Gia san pham</td>
            <td><input type="text" name="price" value="<?php echo $product['Price'] ?>" class="col-12"></td>
        </tr>
        <tr>
            <td>Mo ta san pham</td>
            <td><input type="text" name="desc" value="<?php echo $product['Description'] ?>" class="col-12"></td>
        </tr>
        <tr>
            <td>Nha san xuat</td>
            <td><input type="text" name="vendor" value="<?php echo $product['Vendor'] ?>" class="col-12"></td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-primary">update</button>
            </td>
        </tr>
    </table>
</body>
</html>
