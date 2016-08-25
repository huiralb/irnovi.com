<?php 
namespace App\Repo;

class PostsRepo{

    public function all()
    {
        return \App\Post::all();
    }
    
    public function paginate($page = 3)
    {
        return \App\Post::paginate($page);
    }
}