<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vimi extends Model
{
    use HasFactory;

    protected $table = 'vimis';

    protected $guarded = [];

    public function getImagesVisiAttribute()
    {
        return '/storage/'. $this->images;
    }
}
