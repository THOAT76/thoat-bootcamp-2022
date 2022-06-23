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
        // User::factory(10)->create();
        \DB::table('admins')->insert([
            'name' => "Admin",
            'email' =>'admin@gmail.com',
            'password' => \Hash::make(123456),
            'created_at' =>date('y-m-d H:i:s'),
        ]);
    }
}
