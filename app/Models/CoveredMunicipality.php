<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoveredMunicipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'dps_id',
        'municipality_id',
    ];

    public function dps()
    {
        return $this->belongsTo(Dps::class);
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
    
}
