<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="header">
        <h2>Панель управления</h2>
        {{ Auth::user()->name }}
    </div>
    <div class="main">
      <div class="panel">
       <p><a href="/">Main</a></p>
      </div>
      <div class="content">
        <div id="hidden" class="hidden">
          <div class="adit">
            <div class="news">
          <div class="input-group mb-3" id="form">
               <input id="title" type="text" class="form-control" placeholder="Заголовок" name="title">
            </div>
            <textarea id="text" class="form-control" aria-label="With textarea" placeholder="Текст" name="text"></textarea>
            <br>
            <select id="game">
              <option disabled="" selected="">Выберите игру</option>
              <option>CS 1.6</option>
              <option>PUBG</option>
              <option>CS:GO</option>
            </select>
            <select id="cat">
              <option disabled="" selected="">Выберите раздел</option>
              <option>Статьи</option>
              <option>Гайды</option>
              <option>Настройки</option>
            </select>
            <br>
            <br>
            <button>Добавить</button>
            </div>
            <hr>
            <div class="search">
              <p>Искать пост</p>
              <form method="GET" action="/findpost">
                <input type="text" name="title" id="find">
                <input type="submit" name="" value="Найти" class="btn btn-success">
              </form>
              
              <input type="hidden" name="" id="name" value="{{ Auth::user()->name }}">
            </div>

            <div id="info">
            </div>
          </div>
        </div>
      </div>
    </div>


<script type="text/javascript" src="js/admin.js">
</script>
</body>
</html>


