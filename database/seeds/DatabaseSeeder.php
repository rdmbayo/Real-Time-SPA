<?php

use App\Model\Category;
use App\Model\Like;
use App\Model\Question;
use App\Model\Reply;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::Class,10)->create();
        factory(Category::Class,5)->create();
        factory(Question::Class,10)->create();
        factory(Reply::Class,50)->create()->each(function($reply){
           return $reply->likes()->save(factory(Like::Class)->make());
        });


    }
}
