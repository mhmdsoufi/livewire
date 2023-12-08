<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        $continents = [
            ['id' => 1, 'name' => 'Europe',],
            ['id' => 2, 'name' => 'Asia',],
            ['id' => 3, 'name' => 'Africa',],
            ['id' => 4, 'name' => 'South America',],
            ['id' => 5, 'name' => 'North America',],
        ];
        foreach ($continents as $continent) {
            \App\Models\Continent::factory()->create($continent);
        }

        $countries = [
            ['id' => 1, 'name' => 'Germany', 'continent_id' => '1'],
            ['id' => 2, 'name' => 'Spain', 'continent_id' => '1'],
            ['id' => 3, 'name' => 'Italy', 'continent_id' => '1'],
            ['id' => 4, 'name' => 'Syria', 'continent_id' => '2'],
            ['id' => 5, 'name' => 'UEA', 'continent_id' => '2'],
            ['id' => 6, 'name' => 'KSA', 'continent_id' => '2'],
            ['id' => 7, 'name' => 'Egypt', 'continent_id' => '3'],
            ['id' => 8, 'name' => 'South Africa', 'continent_id' => '3'],
            ['id' => 9, 'name' => 'Morocco', 'continent_id' => '3'],
            ['id' => 10, 'name' => 'Brazil', 'continent_id' => '4'],
            ['id' => 11, 'name' => 'Argentina', 'continent_id' => '4'],
            ['id' => 12, 'name' => 'Uruguay', 'continent_id' => '4'],
            ['id' => 13, 'name' => 'USA', 'continent_id' => '5'],
            ['id' => 14, 'name' => 'Canada', 'continent_id' => '5'],
            ['id' => 15, 'name' => 'Mexico', 'continent_id' => '5'],
            ];
        foreach ($countries as $country) {
            \App\Models\Country::factory()->create($country);
        }

        \App\Models\Product::factory(100)->create();
    }
}
