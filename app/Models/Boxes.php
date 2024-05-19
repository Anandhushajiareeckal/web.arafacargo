<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boxes extends Model
{
    use HasFactory;

    public function boxStatuses()
    {
        return $this->hasMany(BoxesStatuses::class,'box_id');
    }
}
