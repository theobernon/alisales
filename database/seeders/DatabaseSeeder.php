<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Saler01',
            'email'=>'saler01@alizon.fr',
            'password'=>Hash::make('12345678'),
        ]);
        User::factory(10)->create();
        $this->call([
            CustomerSeeder::class,
        ]);
    }
}
