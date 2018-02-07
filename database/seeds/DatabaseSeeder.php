<?php

use Illuminate\Database\Seeder;
use App\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   $faker = \Faker\Factory::create();

        Project::truncate();
    	for ($i = 0; $i < 50; $i++) {
                $project = Project::create([
                    'title' => $faker->sentence,
                    'description' => $faker->text,
                ]);

                $project_path = public_path() . "/repo/" . $project->id;
                @mkdir($project_path, 0700, TRUE);
                file_put_contents($project_path . "/details.md", '**' . $faker->text . '**');
            }
        }
}
