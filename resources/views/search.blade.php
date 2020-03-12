<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Results</title>
  </head>
  <body>
  	<h3>Результаты поиска</h3>
     @foreach($posts as $post)
        <div>
           <h4>{{ $post->title }}</h4>
           <p class="post">{{ $post->text }}</p>
           <a href="{{ action('ShowController@index', ['id' => $post->id ] ) }}">Читать полностью</a>
           <hr>
       </div>
       @endforeach

   
   
  </body>
</html>