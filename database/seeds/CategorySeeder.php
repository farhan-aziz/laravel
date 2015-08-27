<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

    class CategorySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//		Model::unguard();

        $faker = Faker\Factory::create();

        for($i=1; $i<=4; $i++){

            App\Models\Category::create([
                'title' => $faker->text(50),
                'description'=> $faker->text(500),
                'pre_course'=> $faker->text(500)
            ]);

        }

    }

}
