<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategorieFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categorie::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'title'=> $title,
            'slug'=>Str::slug($title),
            'image1'=>$this->faker->imageUrl(),
            'image2'=>$this->faker->imageUrl(),
            'max_price'=>$this->faker->numberBetween($max=3000,$min=1500),
            'min_price'=>$this->faker->numberBetween($max=1500,$min=800),
            'image3'=>$this->faker->imageUrl(),
            'description'=>$this->faker->text(),
        ];
}
}
