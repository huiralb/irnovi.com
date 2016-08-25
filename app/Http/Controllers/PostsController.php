<?php namespace App\Http\Controllers;


class PostsController extends Controller {

	const MODEL = "App\Post";

	use RESTActions;

	public function index()
	{
		return view('posts.index')->with('posts' , $this->all());
	}

}
