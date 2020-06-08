<?php

namespace App\Controller;

use App\Model\ProductDB;

class ProductController
{
    protected $connectProduct;

    public function __construct()
    {
        $this->connectProduct = new ProductDB();
    }

    public function view()
    {
        $products = $this->connectProduct->getAll();
        include "src/View/list.php";
    }

    public function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $product = $this->connectProduct->get($id);
            include "src/View/delete.php";
        } else {
            $id = $_POST['id'];
            $this->connectProduct->delete($id);
            header("Location:index.php?page=list");
        }
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/View/add.php";
        } else {
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $desc = $_REQUEST['desc'];
            $vendor = $_REQUEST["vendor"];
            $this->connectProduct->add($name, $price, $desc, $vendor);
            header("Location:index.php?page=list");

        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $product = $this->connectProduct->get($id);
            include "src/View/update.php";
        } else {
            $id = $_POST['id'];
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $desc = $_REQUEST['desc'];
            $vendor = $_REQUEST["vendor"];
            $this->connectProduct->update($id, $name, $price, $desc, $vendor);
            header("Location:index.php?page=list");
        }
    }

    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/View/search.php";
        } else {
            $search = $_POST["search"];
            $products = $this->connectProduct->search($search);
            include "src/View/search.php";
        }
    }

}