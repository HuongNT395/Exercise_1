<?php

use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->name = 'Sport';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Fashion';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Travel';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Music';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Film';
        $category->save();

        $category = new \App\Category();
        $category->name = 'World';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Animal';
        $category->save();
    }
}
