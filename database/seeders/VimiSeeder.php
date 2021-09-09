<?php

namespace Database\Seeders;

use App\Models\Vimi;
use Illuminate\Database\Seeder;

class VimiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vimi::create([
            'visi' => 'Terwujudnya HMJ TI yang aktif, inovatif, dan komunikatif serta meningkatkan pelayanan pengabdian untuk JTI yang lebih baik.',
            'misi' => '1. Menjalin rasa kekeluargaan dan solidaritas antar pengurus HMJ TI
            2. Menjadi wadah aspirasi bagi mahasiswa JTI
            3. Menjalin rasa komunikasi yang baik antar elemen JTI
            4. Mengembangkan kreativitas, minat, bakat mahasiswa dalam bidang akademik maupun non akademik'
        ]);
    }
}
