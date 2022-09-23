<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller{

public function user(Post $post) //インポートしたPostをインスタンス化して$postとして使用。
  {
    
     return view('posts/user')->with(['posts' => $post->get()]);  
     //$postの中身を戻り値にする。
  }
  
  
  public function store(Request $request)
{
    $user = Auth::user();
    $input = $request['users'];
    $user->fill($input)->save();
    return redirect('/');
}
 
}
