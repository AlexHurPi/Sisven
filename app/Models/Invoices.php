<?php

class Invoices{
    
    private $id;
    private $number;
    private $customer_id;
    private $date;
    private $pay_mode_id;

public function __construct($id, $number, $customer_id, $date, $pay_mode_id) {
    $this ->id= $id;
    $this ->number=$number;
    $this ->customer_id=$customer_id;
    $this ->date=$date;
    $this ->pay_mode_id=$pay_mode_id;    
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
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of customer_id
     */ 
    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    /**
     * Set the value of customer_id
     *
     * @return  self
     */ 
    public function setCustomer_id($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of pay_mode_id
     */ 
    public function getPay_mode_id()
    {
        return $this->pay_mode_id;
    }

    /**
     * Set the value of pay_mode_id
     *
     * @return  self
     */ 
    public function setPay_mode_id($pay_mode_id)
    {
        $this->pay_mode_id = $pay_mode_id;

        return $this;
    }
}