<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    public function Vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }
    public function Alquiler()
    {
        return $this->belongsTo(Alquiler::class);
    }
    public function Venta()
    {
        return $this->hasMany(Venta::class);
    }
    public function Mantenimiento()
    {
        return $this->hasMany(Mantenimiento::class);
    }
}



