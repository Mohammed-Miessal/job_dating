<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageDirectory = storage_path('app/public/images');

        // Create the directory if it doesn't exist
        if (!File::exists($imageDirectory)) {
            File::makeDirectory($imageDirectory, 0777, true);
        }

        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->paragraph(2,true),
            'content' => $this->faker->paragraph(20,true),
            'user_id' => $this->faker->numberBetween(1,10),
            'company_id' => $this->faker->numberBetween(1,5),
            'image' => $this->faker->image($imageDirectory, $width = 20, $height = 20, 'cats', false),
        ];
    }
}
