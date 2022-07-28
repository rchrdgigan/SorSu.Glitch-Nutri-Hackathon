<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'description',
        'categories',
        'quantity',
        'price',
        'date_harvest'
    ];

    public function farmer_product()
    {
        return $this->hasMany(FarmersProduct::class);
    }

}
