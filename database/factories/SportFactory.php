<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\sport;

class SportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array=['10000','5000','20000','30000'];
        $k = array_rand($array);
        $v = $array[$k];
        return [
            'foto_lapangan' => 'a',
            'nama_lapangan' => $this->faker->name,
            'deskripsi' => $this->faker->text,
            'harga_jasa' => $v,
        ];
    }
}
