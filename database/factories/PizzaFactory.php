<?php

namespace Database\Factories;

use Arr;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $toppingchoices = [
            'Extra Cheese',
            'Black Olives',
            'Preperoni',
            'Sausage',
            'Anchovies',
            'Jalapenos',
            'Onion',
            'Chicken',
            'Green Peppers'
        ];

        $toppings = [];
        for ($i = 1; $i <= rand(1, 4); $i++) {
            $toppings[] = Arr::random($toppingchoices);
        }

        $toppings = array_unique($toppings);

        return [
            'id' => rand(11111, 99999),
            'user_id' => rand(1, 10),
            'size' => Arr::random(['Small', 'Medium', 'Large', 'Extra-Large']),
            'crust' => Arr::random(['Normal', 'Thin', 'Garlic']),
            'toppings' => $toppings,
            'status' => Arr::random(['Ordered', 'Preparing', 'Baking', 'Checking', 'Ready']),
        ];
    }
}
