<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    public function Cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    public function Vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
