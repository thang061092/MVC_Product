<?php

namespace App\Model;

class ProductDB
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item["id"], $item["productName"], $item["productLine"], $item["price"], $item["quantity"], $item["dateCreat"], $item["description"]);
            array_push($arr, $product);
        }
        return $arr;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM products WHERE id= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $item = $stmt->fetch();
        $product = new Product($item["id"], $item["productName"], $item["productLine"], $item["price"], $item["quantity"], $item["dateCreat"], $item["description"]);
        return $product;
    }


    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function add($product)
    {
        $sql = "INSERT INTO `products`(`id`, `productName`, `productLine`, `price`, `quantity`, `dateCreat`, `description`) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $product->getId());
        $stmt->bindParam(2, $product->getProductName());
        $stmt->bindParam(3, $product->getProductLine());
        $stmt->bindParam(4, $product->getPrice());
        $stmt->bindParam(5, $product->getQuantity());
        $stmt->bindParam(6, $product->getDateCreat());
        $stmt->bindParam(7, $product->getDescription());
        $stmt->execute();
    }

    public function update($product)
    {
        $sql = "UPDATE `products` SET `productName`= :productName, `productLine`=:productLine, `price`= :price,`quantity`= :quantity, `dateCreat`= :dateCreat,`description`= :description WHERE id= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $product->getId());
        $stmt->bindParam(":productName", $product->getProductName());
        $stmt->bindParam(":productLine", $product->getProductLine());
        $stmt->bindParam(":price", $product->getPrice());
        $stmt->bindParam(":quantity", $product->getQuantity());
        $stmt->bindParam(":dateCreat", $product->getDateCreat());
        $stmt->bindParam(":description", $product->getDescription());
        $stmt->execute();
    }

    public function search($key)
    {
        $sql = "SELECT * FROM products WHERE productName LIKE :keyword";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":keyword", '%' . $key . '%');
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item["id"], $item["productName"], $item["productLine"], $item["price"], $item["quantity"], $item["dateCreat"], $item["description"]);
            array_push($arr, $product);
        }
        return $arr;
    }


}