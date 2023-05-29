<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "pname" => $this-> faker->words(1, true),
            "pdesc"=> $this -> faker->sentence(1, true),
            "enable"=> '1',
            "pprice" => $this -> faker->numberBetween(100-1000),
            "pimg" => $this ->faker-> randomElement(['p1.png','p2.png','p3.png']),
            "cid" => Category::all()->random()->cid,
            "quantity" => $this-> faker->numberBetween(1, 100),
        ];
    }
}
