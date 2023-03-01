<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologies = ['HTML5', 'CSS3', 'JS', 'Laravel 9', 'C', 'C++','SCSS', 'PHP', 'WINDOWS', 'IOS'];

        foreach ($technologies as $technologyName) {
            $technology = new Technology();
            $technology->name = $technologyName;
            $technology->accent_color = $faker->unique()->hexColor();
            $technology->bg_color = $faker->unique()->hexColor();

            $technology->save();
        }
    }
}
