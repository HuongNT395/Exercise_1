<?php

use Illuminate\Database\Seeder;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post();
        $post->title = "This is first title";
        $post->content = "This is first content";
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();

        $post = new \App\Post();
        $post->title = "This is first title";
        $post->content = "This is first content";
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();

        $post = new \App\Post();
        $post->title = "This is second title";
        $post->content = "This is second content";
        $post->category_id = 3;
        $post->user_id = 2;
        $post->save();

        $post = new \App\Post();
        $post->title = "This is third title";
        $post->content = "This is third content";
        $post->category_id = 1;
        $post->user_id = 3;
        $post->save();

        $post = new \App\Post();
        $post->title = "This is four title";
        $post->content = "This is four content";
        $post->category_id = 3;
        $post->user_id = 1;
        $post->save();
    }
}
