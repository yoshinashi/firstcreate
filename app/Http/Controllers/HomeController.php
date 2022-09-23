<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller{

public function home(Post $post) //インポートしたPostをインスタンス化して$postとして使用。
  {
    
     return view('home')->with(['posts' => $post->get()]);  
     //$postの中身を戻り値にする。
  }
}
