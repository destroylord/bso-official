<?php

namespace App\Models\Web;

use App\Models\CategoryStructure;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;

    public function CategoryStructure()
    {
        return $this->belongsTo(CategoryStructure::class);
    }
}
