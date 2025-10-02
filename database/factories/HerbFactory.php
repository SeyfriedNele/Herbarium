<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
    use App\Models\Herb;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Herb>
 */
class HerbFactory extends Factory
{
    protected $model = Herb::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->name,
            'usage' => 
                ([
                    'Zur Behandlung von Erkältungen.',
                    'Hilft bei Magen-Darm-Beschwerden.',
                    'Wird als Tee zur Beruhigung verwendet.',
                    'Ideal für Salben gegen Hautreizungen.',
                    'Wird in der Küche zum Würzen verwendet.',
                ]),
            'description' => $this->faker->sentence
                
        ];
    }
}
