<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Consultant;

class ConsultantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
        protected $model = Consultant::class;
        public function definition()
        {
            $array=['10000','5000','20000','30000'];
            $k = array_rand($array);
            $v = $array[$k];
            return [
            'foto_profil' => 'a',
            'nama_pakar' => $this->faker->name,
            'bidang' => $this->faker->jobTitle,
            'deskripsi' => $this->faker->text,
            'harga_jasa' => $v,
            ];
        }
    
}
