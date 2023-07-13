<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Comment::factory(40)->create();

        for ($i = 0; $i < 10; $i++) {
            $user = new Comment();
            $user->episode_id = $faker->numberBetween(1, 100);
            $user->user_id = 'johndoe' . $i . '@example.com';
            $user->comment_body = 'password';
            $user->save();
        }
    }
}
