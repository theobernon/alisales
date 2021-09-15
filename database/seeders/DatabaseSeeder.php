<?php

namespace Database\Seeders;

use App\Models\Customer;
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
            'name'=>'Test',
            'email'=>'test@test.fr',
            'password'=>Hash::make('12345678'),
        ]);

        User::factory(10)->create();

         $this->call([
             CustomerSeeder::class,
         ]);
    }
}
