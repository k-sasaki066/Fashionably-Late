<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dummy_date = $this->faker->dateTimeThisMonth;
        return [
            'category_id' => $this->faker->numberBetween(1,5),
            // 'category_id' => function() {
            //         return Category::factory()->create()->id;},
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->numberBetween(1,3),
            'email' => $this->faker->unique()->safeEmail(),
            'tel'=> $this->faker->numerify('###########'),
            'address' => $this->faker->streetAddress(),
            'building' => $this->faker->secondaryAddress(),
            'detail' => $this->faker->realText(20),
            'created_at' => $this->faker->dateTimeBetween('-3days', '3days'),
        ];
    }
}
