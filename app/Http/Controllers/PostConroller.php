<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
class PostConroller extends Controller{
	public function postCreatePost(Request $request){

		$post = new Post();
		$post->body = $request['body'];
		$request->user()->posts()->save($post);
		return redirect()->route('dashboard');



	}

}
