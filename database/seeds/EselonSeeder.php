<?php

use App\Model\Eselon;
use Illuminate\Database\Seeder;

class EselonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
            [
                [
                    'name'  => 'Sekretariat Jenderal',
                    'level' => 1
                ],
                [
                    'name'  => 'Inspektorat Jenderal',
                    'level' => 1
                ],
                [
                    'name'  => 'Planologi Kehutanan Dan Tata Lingkungan',
                    'level' => 1
                ],
                [
                    'name'  => 'Konservasi Sumber Daya Alam Dan Ekosistem',
                    'level' => 1
                ],
                [
                    'name'  => 'Pengendalian DAS Dan Hutan Lindung',
                    'level' => 1
                ],
                [
                    'name'  => 'Pengelolaan Hutan Dan Produksi Lestari',
                    'level' => 1
                ],
                [
                    'name'  => 'Pengendalian Pencemaran Dan Kerusakan Lingkungan',
                    'level' => 1
                ],
                [
                    'name'  => 'Pengelolaan Sampah, Limbah Dan B3',
                    'level' => 1
                ],
                [
                    'name'  => 'Pengendalian Perubahan Iklim',
                    'level' => 1
                ],
                [
                    'name'  => 'Perhutanan Sosial Dan Kemitraan Lingkungan',
                    'level' => 1
                ],
                [
                    'name'  => 'Penegakkan Hukum Lingkungan Hidup Dan Kehutanan',
                    'level' => 1
                ],
                [
                    'name'  => 'BP2SDM',
                    'level' => 1
                ],
                [
                    'name'  => 'Badan Litbang Dan Inovasi',
                    'level' => 1
                ],
            ];

        foreach ($data as $key => $value) {
            Eselon::create($value);
        }
    }
}
