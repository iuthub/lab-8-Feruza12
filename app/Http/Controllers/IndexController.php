<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    public function index(){
    	
    	// $id=5;
    	// $name="Feruza";
    	// $age=18;
    	$arr=[1,2,3,4,5];
    	// return view("home", compact(["id" , "name"]));
    	// return view("home", compact(["arr"]));
    	// return view("home")->with("id",$id)->with("name" , $name);
    	// return view("home")->with(["id" => $id, "name" => $name]);
    	return view("home");

    }
    public function post(Request $req){
    	$post =new Post();
    	$post->title=$req->title;
    	$post->content=$req->content;
    	$post->save();
    	return redirect("/");
    }
    public function list(){
			$posts = Post::all();
    	return view("list", compact("posts"));
    }
    public function delete($id){
    		$post = Post::find($id);
    		$post->delete();
    		return redirect()->route("list");
    }
    public function update(Request $req, $id){
    	if(
    	)
    	$post = Post::find($id);
    	
    }
}
