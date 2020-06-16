<?php

namespace App\Controller;

use App\Model\Product;
use App\Model\ProductDB;

class ProductController
{
    protected $connectProduct;

    public function __construct()
    {
        $this->connectProduct = new ProductDB();
    }

    public function viewProduct()
    {
        $products = $this->connectProduct->getAll();
        include "src/View/list.php";
    }

    public function deleteProduct($id)
    {
        $this->connectProduct->delete($id);
        header("Location:index.php?page=list-product");
    }

    public function addProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/View/add.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $line = $_REQUEST['line'];
            $price = $_REQUEST["price"];
            $quantity = $_REQUEST["quantity"];
            $date = $_REQUEST["date"];
            $desc = $_REQUEST["desc"];
            $product= new Product($id,$name,$line,$price,$quantity,$date,$desc);
            $this->connectProduct->add($product);
            header("Location:index.php?page=list-product");

        }
    }

    public function updateProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $product = $this->connectProduct->get($id);
            include "src/View/update.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $line = $_REQUEST['line'];
            $price = $_REQUEST["price"];
            $quantity = $_REQUEST["quantity"];
            $date = $_REQUEST["date"];
            $desc = $_REQUEST["desc"];
            $product= new Product($id,$name,$line,$price,$quantity,$date,$desc);
            $this->connectProduct->update($product);
            header("Location:index.php?page=list-product");
        }
    }

    public function searchProduct()
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