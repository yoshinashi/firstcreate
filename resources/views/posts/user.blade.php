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
       
        
        <h1>プロフィールを作る</h1>
        
        
        <form action="/" method="POST">
            @csrf
            <div class="name">
                <h2>名前</h2>
                <input type="text" name="users[name]" placeholder="ニックネームも可"/>
            </div>
            <div class="profile">
                <h2>自己PR</h2>
                <textarea name="users[profile]" placeholder="学生時代の部活や趣味など"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        
        　   <form action="/" method="get">
             　<button type="submit" name="add">戻る</button>
           　</form>
             
        
    </body>
</html>    