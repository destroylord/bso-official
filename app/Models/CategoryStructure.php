<?php

namespace App\Models;

use App\Models\Web\Structure;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryStructure extends Model
{
    use HasFactory;

    public function structures()
    {
        return $this->hasMany(Structure::class);
    }
}
