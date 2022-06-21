<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Materail;
use Illuminate\Support\Str;

class MaterailFactory extends Factory
{
     /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Materail::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
       return [
           'nom_materail'=> $title,
           'slug'=>Str::slug($title),
           'description'=>$this->faker->paragraph(),
           'image'=>$this->faker->imageUrl(),
           'price'=>$this->faker->numberBetween($max=900,$min=100),
           'inStock'=>$this->faker->numberBetween($max=10,$min=1),
           'categorie_id'=>$this->faker->numberBetween($max=10,$min=1),
           
       ];
    }
}
