<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Teacher;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'salutation' => 'Dr',
            'last_name' => $this->faker->firstName,
            'first_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
