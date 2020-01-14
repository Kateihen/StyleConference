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
        DB::table('managers')->insert([
            'name' => 'KateAdmin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
