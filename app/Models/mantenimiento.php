<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mantenimiento extends Model
{
    use HasFactory;
    public function Cliente()
    {
        return $this->hasMany(Cliente::class);
    }
    public function Vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
