<?php

use Faker\Generator as Faker;
use App\Article;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Article::class, function ($faker) {

    $title = $faker->sentence(3, true);

    return [
        'title' => $title,
    'slug' => slugify($title),
    'published' => $faker->boolean(80),
    'published_date' => $faker->dateTime(),
    'revision_id' => function () {
        return factory(App\User::class)->create()->id;
    }
    ];
});
