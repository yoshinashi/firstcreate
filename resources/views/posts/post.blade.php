<!DOCTYPE html>
<html lang="ja">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
            <form action="/" method="get">
             <button type="submit" name="add">戻る</button>
           </form>
            
        </header>
        
        <div class="main-title">
        <h1>活動を投稿する</h1>
        </div>
        
        
        <form action="/" method="POST">
            @csrf
            <div class="clubname">
                <h2>サークル名</h2>
                <input type="text" name="post[clubname]" placeholder="サークル名"/>
            </div>
            <div class="body">
                <h2>活動内容</h2>
                <textarea name="post[activity]" placeholder="活動内容"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        
        
        <form method="POST" action="/" enctype="multipart/form-data">
          @csrf
          <input type="file" name="image">
          <button>アップロード</button>
        </form>
       
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='clubname'>{{ $post->clubname }}</h2>
                    <p class='activity'>{{ $post->activity }}</p>
                </div>
            @endforeach
        </div>
        
             
        
    </body>