<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CourseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//		Model::unguard();

        $faker = Faker\Factory::create();

        $categories = App\Models\Category::all();

        foreach($categories as $category) {

            for ($i = 0; $i <= rand(1,5); $i++) {

                App\Models\Course::create([
                    'category_id' => $category->id,
                    'title' => $faker->text(100),
                    'description' => $faker->text(1500),
                    'qualification_type' => $faker->text(5),
                    'hours'=> rand(2, 20),
                    'credit_value'=> rand(1, 10),
                    'validity'=> $faker->text('20'),
                    'unit_combinations'=> $faker->text('20'),
                    'suitable_for'=> $faker->text('20'),
                    'market_price' => $faker->randomNumber(2),
                    'eln_price' => $faker->randomNumber(2),
                    'assessments' => $faker->text(500),
                ]);

                $this->command->info('Course for category ' . $category->title . ' created.');

            }

        }

    }

}
