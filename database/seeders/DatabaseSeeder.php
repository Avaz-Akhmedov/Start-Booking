<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            CitySeeder::class,
            ProductSeeder::class,
            ProductContactSeeder::class,
            ReviewSeeder::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            ProductAttributeSeeder::class,

        ]);
    }
}
