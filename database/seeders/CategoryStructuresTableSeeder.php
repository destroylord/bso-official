<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\CategoryStructure;

class CategoryStructuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryStructure::create([
            'name' => 'Badan Pengurus Harian'
        ]);
        CategoryStructure::create([
            'name' => 'Divisi Perhubungan'
        ]);
        CategoryStructure::create([
            'name' => 'Divisi Minat dan Bakat'
        ]);
        CategoryStructure::create([
            'name' => 'Divisi Kewirausahaan'
        ]);
        CategoryStructure::create([
            'name' => 'Divisi Administrasi'
        ]);
    }
}
