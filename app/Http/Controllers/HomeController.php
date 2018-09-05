<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class HomeController extends Controller
{
      public function index(){
    	$posts  = Post::simplePaginate(5); // lấy tất cả bài viết bằng câu lệnh hàm all()

    	return view('index',[
    		'posts' => $posts // dữ liệu được truyền qua view bằng biến posts
    	]);
    }
    public function detail($slug){
    	$post = \App\Post::where('slug', $slug)->firstOrFail();
    	return view('posts.detail',[
    		'post' => $post // dữ liệu được truyền qua view bằng biến posts
    	]);
    }
     public function category($slug){
    	// $category = \App\Category::where('slug', $slug)->firstOrFail();
    	$posts = \App\Post::where('category_id', $category->id)->get();
    	return view('posts.category',[
    		'posts' => $posts // dữ liệu được truyền qua view bằng biến posts
    	]);
    }
}
