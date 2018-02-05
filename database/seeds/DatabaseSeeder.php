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
            Project::create([
                'title' => $faker->sentence,
                'description' => $faker->text,
            ]);
        }
    }
}
