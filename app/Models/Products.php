<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $primaryKey='product_id';
    protected $table = "products"; 
    protected $fillable = [
        'product_code','product_title','product_desc','img', 'price'
    ];
}
