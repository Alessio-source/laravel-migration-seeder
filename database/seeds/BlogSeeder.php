<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 10; $i++) {
            $blog = new Blog();
            $blog->title = $faker->text(50);
            $blog->subtitle = $faker->text(255);
            $blog->text = $faker->text(500);
            $blog->author = $faker->name();
            $blog->save();
        }
    }
}
