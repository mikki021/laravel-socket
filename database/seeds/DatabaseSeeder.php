<?php

use App\Comment;
use App\Post;
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
        factory(User::class, 5)->create()->each(function ($user) {
            $users[] = $user;
            for ($i = 0; $i < 3; $i++) {
                $user->posts()->save(factory(Post::class)->make());
            }
        });
    }
}
