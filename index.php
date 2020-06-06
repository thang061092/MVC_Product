<?php

use App\Controller\ProductController;

$load = require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$controller = new ProductController();
?>
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
<a href="index.php?page=list">danh sach san pham</a>
<br>
<a href="index.php?page=add">them san pham</a>
<form action="index.php?page=search" method="post">
    <input type="text" name="search" required>
    <button type="submit">Search</button>

</form>
<?php
switch ($page) {
    case 'list':
        $controller->view();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'add':
        $controller->add();
        break;
    case 'update':
        $controller->update();
        break;
    case 'search':
        $controller->search();
        break;
}
?>
</body>
</html>
