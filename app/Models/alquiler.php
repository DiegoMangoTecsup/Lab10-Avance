<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alquiler extends Model
{
    use HasFactory;
    public function Cliente()
    {
        return $this->hasMany(cliente::class);
    }
    public function Vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }
}

