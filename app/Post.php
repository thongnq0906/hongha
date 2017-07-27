<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){
    	return $this->belongsToMany('\App\Category','post_category','post_id','category_id');
    }
    public function Cate()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function hasCategory($category)
    {
        if ($this->category()->where('category_id',$category)->first()){
            return true;
        }
        return false;
    }

    public function hasRole($role)
    {
        
        return false;
    }

    public function getUrl(){
        $base_url = Url('/');
        $prefix_url = 'tin-tuc';
        $url = $base_url.'/'.$prefix_url.'/'.$this->slug.'.html';
        return $url;
    }

    public function getShortDec(){
        if (strlen($this->description) > 100){
            return substr($this->description, 0,strpos($this->description, ' ', 100)) . ' ...';
        } else {
        return $this->description;
        }
    }

    public function getEditUrl(){
        return route('edit-post',['id'=>$this->id]);
    }
}
