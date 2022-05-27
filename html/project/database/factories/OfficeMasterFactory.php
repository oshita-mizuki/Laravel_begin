<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeMasterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'office_id' => $this->faker->country,						
            'name' => $this->faker->dateTimeThisDecade,						
            'post_code' => $this->faker->boolean,
            'address1' => $this->faker->boolean,							
            'address2' => $this->faker->boolean,						
            'insurance_symbol' => $this->faker->randomNumber,						
            'manager' => $this->faker->randomNumber,						
            'belong' => $this->faker->randomNumber,						
            'telephone' => $this->faker->randomNumber,		
            'mail' => $this->faker->randomNumber,				

        ];
    }
}
