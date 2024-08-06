<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $project = new Project();
            $project->title_project = $faker->company();
            $project->description = $faker->paragraph();
            $project->img = "https://picsum.photos/id/" . rand(1, 600) . "/200/300";
            $project->save();
        }
    }
}
