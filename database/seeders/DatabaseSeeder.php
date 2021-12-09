<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create(['name' => 'Admin', 'email' => 'admin@demo.com', 'password' => bcrypt("demo123")]);
        $this->call([
            ActivitySeeder::class
        ]);
    }
}
