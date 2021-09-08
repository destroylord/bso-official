<?php

namespace App\Models;

use App\Models\CategoryStructure;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructureOrganization extends Model
{
    use HasFactory;

    protected $table = 'structures';

    protected $fillable = [
        'position',
        'name',
        'images',
        'category_structure_id'
    ];  

    public function CategoryStructure()
    {
        return $this->belongsTo(CategoryStructure::class);
    }
}
