<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->company,
            'address'=> $this->faker->streetAddress,
            'postalCode'=>$this->faker->postcode,
            'city'=>$this->faker->city,
            'email'=>$this->faker->email,
            'url'=>$this->faker->url,
            'user_id'=>User::inRandomOrder()->first()->id,
        ];
    }
}














