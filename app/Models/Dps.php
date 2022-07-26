<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dps extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];
    
    public function cover_municipality()
    {
        return $this->hasMany(CoveredMunicipality::class);
    }
}
