<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipments extends Model
{
    use HasFactory;



    public function boxes()
    {
        return $this->hasMany(Boxes::class,'shipment_id');
    }
}

