<?php

namespace Database\Factories;

use App\Models\Snack;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class SnackFactory extends Factory
{
    protected $model = Snack::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'shop_id' => Shop::factory(),
        ];
    }
}
