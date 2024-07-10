<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Address;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'date' => $this->faker->dateTimeBetween('-1 year', '+1 year'),
            'organizer' => $this->faker->name,
            'address_id' => Address::factory(),
            'image_id' => Image::factory()

        ];
    }
}
