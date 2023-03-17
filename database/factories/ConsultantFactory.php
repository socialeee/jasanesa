<?php

namespace Database\Factories;

use App\Models\bidang;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Consultant;
use App\Models\Prodi;

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
        $array = ['10000', '5000', '20000', '30000'];
        $k = array_rand($array);
        $v = $array[$k];
        return [
            'foto_profil' => 'a',
            'nama_pakar' => $this->faker->name,
            'email_pakar' => $this->faker->email,
            'bidang_id' => bidang::first()->id,
            'deskripsi' => $this->faker->text,
            'pengalaman' => $this->faker->text,
            'harga_jasa' => $v,
        ];
    }
}
