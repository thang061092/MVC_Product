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
        $sql = "SELECT * FROM Products";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM Products WHERE Id= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();

    }


    public function delete($id)
    {
        $sql = "DELETE FROM Products WHERE Id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function add($ProductName, $Price, $Description, $Vendor)
    {
        $sql = "INSERT INTO `Products`( `ProductName`, `Price`, `Description`, `Vendor`) VALUES (:ProductName, :Price, :Description, :Vendor)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":ProductName", $ProductName);
        $stmt->bindParam(":Price", $Price);
        $stmt->bindParam(":Description", $Description);
        $stmt->bindParam(":Vendor", $Vendor);
        $stmt->execute();
    }

    public function update($id, $ProductName, $Price, $Description, $Vendor)
    {
        $sql = "UPDATE `Products` SET `ProductName`= :ProductName,`Price`= :Price,`Description`= :Description,`Vendor`= :Vendor WHERE Id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":ProductName", $ProductName);
        $stmt->bindParam(":Price", $Price);
        $stmt->bindParam(":Description", $Description);
        $stmt->bindParam(":Vendor", $Vendor);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function search($key)
    {
        $sql = "SELECT * FROM Products WHERE ProductName LIKE :keyword";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":keyword", '%' . $key . '%');
        $stmt->execute();
        return ($stmt->fetchAll());
    }


}