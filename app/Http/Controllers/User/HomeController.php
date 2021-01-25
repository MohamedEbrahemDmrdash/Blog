<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;

class HomeController extends Controller
{
    public function index()
    {
    	$post=post::where('status',1)->paginate(1);
    	return view('user.home',compact('post'));
    }

    public function tag($slug)
    {
        $tag=tag::where('slug',$slug)->first();
        $tag_id=$tag->id;
    	$post=tag::find($tag_id)->posts();
    	return view('user.home',compact('post'));
    }

    public function category($slug)
    {
    	$category=category::where('slug',$slug)->first();
        $category_id=$category->id;
        $post=category::find($category_id)->posts();
    	return view('user.home',compact('post'));
    }
}
