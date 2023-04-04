<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{

    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(7),
            'description' => $this->faker->text,
            'project_key' => Str::random(8),
            'project_lead_id' => $this->faker->numberBetween(1, 8),
            'created_by' => 1,
            'updated_by' => 1,
            'start_date' => $this->faker->dateTime,
            'finish_date' => $this->faker->dateTime,
            'client_id' => $this->faker->numberBetween(1, 8),
        ];
    }
}
