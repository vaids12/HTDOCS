<?php

namespace Database\Factories;
use  App\models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->word(),
           'price'=>$this->faker->numerify(),
           'brand_id'=>$this->faker->randomDigitNot(0)
        ];
    }
}
