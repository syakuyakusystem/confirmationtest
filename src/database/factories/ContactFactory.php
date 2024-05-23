<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstKanaName($gender = null),
            'last_name' => $this->faker->lastKanaName(),
            'gender' => $this->faker->numberBetween($int1 = 1, $int2 = 3),
            'email' => $this->faker->email,
            'tell' => $this->faker->e164PhoneNumber(),
            'address' => $this->faker->address(),
            'building' => $this->faker->buildingNumber(),
            'detail' => $this->faker->text($maxNbChars = 30),
        ];
    }
}







