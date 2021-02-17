<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use App\Model\Question;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug'  => Str::slug($title, '-'),
        'body'  => $faker->text,
        'category_id'  => function (){
            return Category::all()->random();
        },
        'user_id' => function() {
            return User::all()->random();
        }


        /**
         $table->increments('id');
         $table->string('title');
         $table->string('slug');
         $table->text('body');
         $table->integer('category_id')->unsigned();
         $table->integer('user_id')->unsigned();
         */
    ];
});
