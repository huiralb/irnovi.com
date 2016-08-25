<?php namespace App\Http\Controllers;

use App\Repo\PostsRepo as Post;

class PagesController extends Controller {

	public function __construct()
	{
		$this->post = new Post;
	}

	public function index()
	{
		return view('index')->with('posts', $this->post->paginate() );
	}

}
