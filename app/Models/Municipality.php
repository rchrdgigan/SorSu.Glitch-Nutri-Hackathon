<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'municipality',
    ];

    public function cover_municipality()
    {
        return $this->hasMany(CoveredMunicipality::class);
    }
}
