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
    	$category_music->category = 'Tin tức';
        $category_music->description = 'All posts about music';
    	$category_music->parent_id = 0;
        $category_music->slug = 'Tin Tức';
    	$category_music->save();


    	$category_video = new \App\Category;
    	$category_video->category = 'Mặt bằng';
    	$category_video->description = 'All posts about s';
        $category_video->parent_id = 0;
        $category_video->slug = 'mat-bang';
    	$category_video->save();

        $category_video = new \App\Category;
        $category_video->category = 'Chinh sách';
        $category_video->description = 'All posts about ad';
        $category_video->parent_id = 0;
        $category_video->slug = 'chinh-sach';
        $category_video->save();


    	$category_photo = new \App\Category;
    	$category_photo->category = 'Tin du an';
    	$category_photo->description = 'All posts about hi';
        $category_photo->parent_id = 1;
        $category_photo->slug = 'tin-du-an';
    	$category_photo->save();

        $category_rap = new \App\Category;
        $category_rap->category = 'chính sách mới';
        $category_rap->description = 'All posts about ha';
        $category_rap->parent_id = 2;
        $category_rap->slug = 'chinh-sach-moi';
        $category_rap->save();


    }
}
