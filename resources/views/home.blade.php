<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>CircleStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="{{ asset('/css/.css')  }}" >
         <script src="{{ asset('js/.js') }}"></script>
    </head>
    
    <body>
        <header>
            <div　class="buttons">

              <form action="/users" method="get">
             　　<button  type="submit" name="add">自己プロフィール</button>
           　　</form>
           　　
           　
            
           　
           　<form action="/posts" method="get">
             　　<button type="submit" name="add">活動を投稿する</button>
           　</form>
           </div>
           
           　
           
            
        </header>
        
        <h1>CircleStand</h1>
        
         <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='clubname'>{{ $post->clubname }}</h2>
                    <p class='activity'>{{ $post->activity }}</p>
                </div>
            @endforeach
        </div>
            
        <!-- /.grid -->
    </body>    