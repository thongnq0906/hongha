<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function post(){
    	return $this->belongsToMany('\App\Post','post_category','category_id','post_id');
    }

    public function getUrl(){
        $base_url = Url('/');
        $prefix_url = 'tin-tuc';
        $url = $base_url.'/'.$prefix_url.'/'.$this->slug.'.html';
        return $url;
    }
}
