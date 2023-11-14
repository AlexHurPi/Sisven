<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model{
  
    use HasFactory;
    protected $table = "tb_products";
    protected $primarykey = 'id'; 
    //private $name;
    //private $price;
    //private $stock;
    //private $dcategory_id;
    public $timestamps = false;

}