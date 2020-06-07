<?php

use App\City;
use App\Province;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $province = [
            [
                'name' => 'D.K.I. Jakarta'
            ],
            [
                'name' => 'Jawa Barat'
            ],
            [
                'name' => 'Jawa Tengah'
            ],
            [
                'name' => 'D.I. Yogyakarta'
            ],
            [
                'name' => 'Jawa Timur'
            ],
            [
                'name' => 'Bali'
            ],
            [
                'name' => 'Kalimantan Selatan'
            ],
            [
                'name' => 'Kalimantan Timur'
            ],
            [
                'name' => 'Kalimantan Tengah'
            ],
        ];
        $city = [
            [
                'province_id' => 1,
                'name' => 'Jakarta'
            ],
            [
                'province_id' => 2,
                'name' => 'Bandung'
            ],
            [
                'province_id' => 3,
                'name' => 'Semarang'
            ],
            [
                'province_id' => 4,
                'name' => 'Yogyakarta'
            ],
            [
                'province_id' => 5,
                'name' => 'Surabaya'
            ],
            [
                'province_id' => 6,
                'name' => 'Denpasar'
            ],
            [
                'province_id' => 7,
                'name' => 'Banjarmasin'
            ],
            [
                'province_id' => 8,
                'name' => 'Balikpapan'
            ],
            [
                'province_id' => 8,
                'name' => 'Samarinda'
            ],
            [
                'province_id' => 9,
                'name' => 'Palangkaraya'
            ],
        ];
        Province::insert($province);
        City::insert($city);
    }
}
