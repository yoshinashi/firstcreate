<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Home;
class PostController extends Controller{

public function post(Post $post, Request $request) //インポートしたPostをインスタンス化して$postとして使用。
  {
     
 return view('posts/post')->with(['posts' => $post->get()]);  
     //$postの中身を戻り値にする。
  }
  
  public function user()
{
    return view('posts/user');
    
}


  
 public function store(Request $request, Post $post)
{
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/' );
}

  public function home(Post $post) //インポートしたPostをインスタンス化して$postとして使用。
  {
    
     return view('home')->with(['posts' => $post->get()]);  
     //$postの中身を戻り値にする。
  }

  
 
    
}