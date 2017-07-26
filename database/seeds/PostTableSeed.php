<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Post;

class PostTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
    //     $category_music = Category::where('category','Music')->first();
    //     $category_video = Category::where('category','Video')->first();
    //     $category_photo = Category::where('category','Photo')->first();

    //     $post_music = new Post;
    //     $post_music->post = 'This is a song';
    //     $post_music->description = 'And that is a lyric';
    //     $post_music->slug = str_slug($post_music->post);
    //     $post_music->save();
    //     $post_music->category()->attach($category_music);

    //     $post_video = new Post;
    //     $post_video->post = 'This is a video';
    //     $post_video->description = 'And that is a video';
    //     $post_video->slug = str_slug($post_video->post);
    //     $post_video->save();
    //     $post_video->category()->attach($category_video);

    //     $post_photo = new Post;
    //     $post_photo->post = 'This is a photo';
    //     $post_photo->description = 'And that is a photo';
    //     $post_photo->slug = str_slug($post_photo->post);
    //     $post_photo->save();
    //     $post_photo->category()->attach($category_photo);

        $faker = Faker\Factory::create();
        Post::truncate();

        foreach( range(1,30) as $index ){
            $post = Post::create([
                'post' => $faker->sentence,
                'description' => $faker->paragraph(20),
                'slug' => str_slug($faker->sentence),
                'category_id' => rand(1,3)
                ]);
            $post->slug = str_slug($post->post).'-'.$post->id;
        }

    }

    
}
