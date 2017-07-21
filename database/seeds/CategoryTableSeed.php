<?php

use Illuminate\Database\Seeder;

class CategoryTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::truncate();
    	$category_music = new \App\Category;
    	$category_music->category = 'Music';
    	$category_music->description = 'All posts about music';
    	$category_music->save();


    	$category_video = new \App\Category;
    	$category_video->category = 'Video';
    	$category_video->description = 'All posts about video';
    	$category_video->save();


    	$category_photo = new \App\Category;
    	$category_photo->category = 'Photo';
    	$category_photo->description = 'All posts about photo';
    	$category_photo->save();

    }
}
