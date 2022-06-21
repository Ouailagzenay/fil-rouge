<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;

class OrderFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prodact_name'=>$this->faker->sentence(),
            'price'=>$this->faker->numberBetween($max=900,$min=100),
            'qty'=>$this->faker->numberBetween($max=10,$min=1),
            'total'=>$this->faker->numberBetween($max=9000,$min=1000),
            'user_id'=>$this->faker->numberBetween($max=10,$min=1),
        ];
    }
}
