<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
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
        User::factory(10)->create()->each(function($user) {
            $user->questions()
            ->saveMany(Question::factory(rand(1,5))->make())
            ->each(function($q){
                $q->answers()->saveMany(Answer::factory(rand(0,5))->make());
            });
                });
    }
}
