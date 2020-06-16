<?php


namespace App\Model;


class Product
{
    protected $id;
    protected $productName;
    protected $productLine;
    protected $price;
    protected $quantity;
    protected $dateCreat;
    protected $description;

    public function __construct($id,$productName,$productLine,$price,$quantity,$dateCreat,$description)
    {
        $this->id=$id;
        $this->productName=$productName;
        $this->productLine=$productLine;
        $this->price=$price;
        $this->quantity=$quantity;
        $this->dateCreat=$dateCreat;
        $this->description=$description;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return mixed
     */
    public function getDateCreat()
    {
        return $this->dateCreat;
    }

    /**
     * @return mixed
     */
    public function getProductLine()
    {
        return $this->productLine;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

}