<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'tb_customers';
    protected $fillable = [
        'document_number',
        'first_name',
        'last_name',
        'address',
        'birthday',
        'phone_number',
        'email',
    ];
    public $timestamps = false;
}
