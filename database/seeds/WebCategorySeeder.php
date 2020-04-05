<?php

use App\Model\WebCategory;
use Illuminate\Database\Seeder;

class WebCategorySeeder extends Seeder
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
                    'name' => 'Sistem Informasi'
                ],
                [
                    'name' => 'Umum'
                ]
            ];

        foreach ($data as $key => $value) {
            WebCategory::create($value);
        }
    }
}
