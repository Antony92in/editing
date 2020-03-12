<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/welcome.css">
  <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
  <title>Editingcsvonline</title>
</head>
<body background="https://vgtimes.ru/uploads/posts/2018-11/1541525923_pic0.jpg">
  <div class="main">
    <div class="header">
      <br>
      <h1>EditingCSvonline</h1>
      <div>
        @if (Route::has('login'))
        <div>
          @auth
          @if( Auth::user()->status == 'admin' )
          <a href="/admin">Admin</a>
          @endif
          <a href="{{ url('/home') }}">Home</a>
          @else
          <a href="{{ route('login') }}" class="btn btn-secondary btn-sm">Вход</a>

          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="btn btn-secondary btn-sm">Регистрация</a>
          @endif

          @endauth

        </div>
        @endif   
      </div>
    </div>
    <div class="sidebar">
     
      <div class="drop"> 
        <a class="btn btn-dark" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          CS 1.6
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{ action('FindController@cat', ['game' => 'CS 1.6', 'cat' => 'Новости']) }}">Статьи</a>
          <a class="dropdown-item" href="{{ action('FindController@cat', ['game' => 'CS 1.6', 'cat' => 'Гайды']) }}">Гайды</a>
          <a class="dropdown-item" href="{{ action('FindController@cat', ['game' => 'CS 1.6', 'cat' => 'Настройки']) }}">Настройки</a>
        </div>
      </div>

      <div class="drop"> 
        <a class="btn btn-dark" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          CS:GO
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{ action('FindController@cat', ['game' => 'CS:GO', 'cat' => 'Новости']) }}">Статьи</a>
          <a class="dropdown-item" href="{{ action('FindController@cat', ['game' => 'CS:GO', 'cat' => 'Гайды']) }}">Гайды</a>
          <a class="dropdown-item" href="{{ action('FindController@cat', ['game' => 'CS:GO', 'cat' => 'Настройки']) }}">Настройки</a>
        </div>
      </div>

      <div class="drop"> 
        <a class="btn btn-dark" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          PUBG
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{ action('FindController@cat', ['game' => 'PUBG', 'cat' => 'Новости']) }}">Статьи</a>
          <a class="dropdown-item" href="{{ action('FindController@cat', ['game' => 'PUBG', 'cat' => 'Гайды']) }}">Гайды</a>
          <a class="dropdown-item" href="{{ action('FindController@cat', ['game' => 'PUBG', 'cat' => 'Настройки']) }}">Настройки</a>
        </div>
      </div>



      <div class="right">
        <form method="GET" action="/findpost">
          <p>Найти пост</p>
          <input type="text" name="title" >
          <input type="submit" name="" value="Искать" class="btn btn-info">
        </form>
      </div>

    </div>
    <div class="content">
      <h3 style="text-align: center;">Последние новости</h3>
      @php

      $posts = App\post::orderBy('created_at', 'desc')->limit(5)->get();

      @endphp 

      @foreach($posts as $post)
      <div>
       <h4>{{ $post->title }}</h4>
       <p class="post">{{ $post->text }}</p>
       <a href="{{ action('ShowController@index', ['id' => $post->id ] ) }}" >Читать полностью</a>
       <hr>
     </div>
     @endforeach



   </div>

   <div class="right">
    <h3>Контакты</h3>
    <p><a href="https://vk.com/editingcsvonline" class="btn btn-outline-primary">Группа ВК</a></p>
    <p><a href="https://www.youtube.com/channel/UCoAgKBCYIBb4IrpcGd_lI9g" class="btn btn-outline-primary">Наш Youtube канал</a></p>
    <p class="btn btn-outline-primary">Группа discord <br> https://discord.gg/ywu4Kt</p>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
