<?php

namespace Database\Factories;

use App\Models\AuditTrail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuditTrailsFactory extends Factory
{
    protected $model = AuditTrail::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id,
            'reference_id' => fake()->uuid(),
            'title' => fake()->title(),
            'section' => fake()->title(),
            'type' => fake()->title(),
        ];
    }
}
