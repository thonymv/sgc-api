<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $code = 0;
        switch (rand(1, 3)) {
            case 1:
                $code = 4120000000;
                break;
            case 2:
                $code = 4140000000;
                break;
            case 3:
                $code = 4160000000;
                break;
            default:
                $code = 4160000000;
                break;
        }
        $name = $this->faker->firstName();
        $lastname = $this->faker->lastName();
        return [
            'usuario' => $this->faker->numerify(substr($name, 0, 1) . substr($lastname, 0, 5) . "##"),
            'nombre' => $name,
            'nombre2' => $this->faker->firstName(),
            'apellido' => $lastname,
            'email' => $this->faker->email(),
            'estatus' => rand(0, 2),
            'pnf' => rand(1, 10),
            'nucleo' => rand(1, 3),
            'apellido2' => $this->faker->lastName(),
            'ci' => $this->faker->unique()->numberBetween(10000000, 27000000),
            'tlf_movil' => $code + $this->faker->unique()->numberBetween(1000000, 9999999),
            'tlf_local' => 2120000000 + $this->faker->unique()->numberBetween(1000000, 9999999),
            'nacimiento' => $this->faker->date('Y-m-d', '2000-12-31'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
