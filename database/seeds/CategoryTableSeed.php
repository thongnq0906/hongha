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
    	$category_music->parent_id = 0;
        $category_music->slug = 'mu-sic';
    	$category_music->save();


    	$category_video = new \App\Category;
    	$category_video->category = 'Video';
    	$category_video->description = 'All posts about video';
        $category_video->parent_id = 0;
        $category_video->slug = 'vi-deo';
    	$category_video->save();

        $category_video = new \App\Category;
        $category_video->category = 'Page';
        $category_video->description = 'All posts about video';
        $category_video->parent_id = 0;
        $category_video->slug = 'page';
        $category_video->save();


    	$category_photo = new \App\Category;
    	$category_photo->category = 'Con Music';
    	$category_photo->description = 'All posts about photo';
        $category_photo->parent_id = 1;
        $category_photo->slug = 'con-mu-sic';
    	$category_photo->save();

        $category_rap = new \App\Category;
        $category_rap->category = 'Con Video';
        $category_rap->description = 'All posts about photo';
        $category_rap->parent_id = 2;
        $category_rap->slug = 'con-pho-to';
        $category_rap->save();


    }
}
