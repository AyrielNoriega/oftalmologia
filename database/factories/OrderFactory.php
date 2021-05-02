<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            // 'name' => $this->faker->name,
            // 'email' => $this->faker->unique()->safeEmail,
            // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
            'user_id' => 1,
            'od_esf' => $this->faker->word,
            'od_cyl' => $this->faker->word,
            'od_eje' => $this->faker->word,
            'od_codigo' => $this->faker->word,
            'od_av' => $this->faker->word,
            'oi_esf' => $this->faker->word,
            'oi_cyl' => $this->faker->word,
            'oi_eje' => $this->faker->word,
            'oi_codigo' => $this->faker->word,
            'oi_av' => $this->faker->word,
            'color' => $this->faker->word,
            'add' => $this->faker->word,
            'bifocal' => $this->faker->word,
            'dep' => $this->faker->word,
            'alt' => $this->faker->word,
            'observaciones' => $this->faker->word,
            'tipo_lente' => $this->faker->word,
            'fotocromatico' => $this->faker->word,
            'material' => $this->faker->word,
            'filtro' => $this->faker->word,
            'dx' => $this->faker->word,
        ];
    }
}
