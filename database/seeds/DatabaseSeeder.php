<?php

use Illuminate\Database\Seeder;
use App\Project;

class DatabaseSeeder extends Seeder
{
    
    private function slugify($string, $replace = array(), $delimiter = '-') {
      // https://github.com/phalcon/incubator/blob/master/Library/Phalcon/Utils/Slug.php
      if (!extension_loaded('iconv')) {
        throw new Exception('iconv module not loaded');
      }
      // Save the old locale and set the new locale to UTF-8
      $oldLocale = setlocale(LC_ALL, '0');
      setlocale(LC_ALL, 'en_US.UTF-8');
      $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
      if (!empty($replace)) {
        $clean = str_replace((array) $replace, ' ', $clean);
      }
      $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
      $clean = strtolower($clean);
      $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
      $clean = trim($clean, $delimiter);
      // Revert back to the old locale
      setlocale(LC_ALL, $oldLocale);
      return $clean;
    }

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
                $title = $faker->sentence;
                $project = Project::create([
                    'title' => $title,
                    'description' => $faker->text,
                    'slug' => $this->slugify($title) . '-' . uniqid()
                ]);

                $project_path = public_path() . "/repo/" . $project->id;
                @mkdir($project_path, 0700, TRUE);
                file_put_contents($project_path . "/details.md", '**' . $faker->text . '**');
            }
        }
}
