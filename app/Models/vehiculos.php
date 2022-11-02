<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    use HasFactory;
    public function Cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    public function Mantenimiento()
    {
        return $this->hasMany(Mantenimiento::class);
    }
    public function Alquiler()
    {
        return $this->hasMany(Alquiler::class);
    }
    public function Venta()
    {
        return $this->hasMany(Venta::class);
    }
    
}
