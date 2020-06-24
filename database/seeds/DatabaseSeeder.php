<?php

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
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            EselonSeeder::class,
            WebCategorySeeder::class,
            WebSeeder::class,
            WebMonitoringSeeder::class
        ]);
    }
}
