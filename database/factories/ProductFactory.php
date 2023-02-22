<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;
    public function definition()
    {
        $array=['LCD','Battery','Finger','Front Camera','Back Camera','Screen Guard'];
        $k = array_rand($array);
        $v = $array[$k];
        return [
            'name'=>$v,
            'stock'=>10,
            'price'=>20000
        ];
    }
}
