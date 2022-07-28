<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmersProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'farmer_id',
        'product_id',
        'municipal_id',
    ];

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
