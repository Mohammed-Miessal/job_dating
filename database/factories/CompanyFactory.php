<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageDirectory = storage_path('app/public/images');

        // Create the directory if it doesn't exist
        if (!File::exists($imageDirectory)) {
            File::makeDirectory($imageDirectory, 0777, true);
        }

        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->image($imageDirectory, $width = 20, $height = 20, 'cats', false),
        ];
    }

}
