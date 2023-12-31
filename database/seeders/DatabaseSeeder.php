<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;


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
        // $this->call(UsersTableSeeder::class);
        // $this->call(BooksTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }
}
