<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\models\Brand;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    Brand::factory(10)->create();

        $this->call([
            UserSeeder::class,
        ]);
            
    }
}
