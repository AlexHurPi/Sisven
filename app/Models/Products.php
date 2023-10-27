<?php


class Products{
  
    private $id;
    private $name;
    private $price;
    private $stock;
    private $dcategory_id;

public function __construct($id, $name, $price, $stock, $dcategory_id) {
    $this ->id= $id;
    $this ->name=$name;
    $this ->price=$price;
    $this ->stock=$stock; 
    $this ->dcategory_id=$dcategory_id;        
}


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of dcategory_id
     */ 
    public function getDcategory_id()
    {
        return $this->dcategory_id;
    }

    /**
     * Set the value of dcategory_id
     *
     * @return  self
     */ 
    public function setDcategory_id($dcategory_id)
    {
        $this->dcategory_id = $dcategory_id;

        return $this;
    }
}