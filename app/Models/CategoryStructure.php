<?php

namespace App\Models;

use App\Models\StructureOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryStructure extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function structures()
    {
        return $this->hasMany(StructureOrganization::class);
    }
}
