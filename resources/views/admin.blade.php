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
              <option>GTA 5</option>
              <option>PUBG</option>
              <option>CS</option>
            </select>
            <br>
            <br>
            <input type="text" name="pic"><p>Добавить ссылку на картинку</p>
            <button type="button" class="btn btn-secondary btn-sm">Добавить</button>
            </div>

            <div id="info"></div>
          </div>
        </div>
      </div>
    </div>


<script type="text/javascript">
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
 $('button').on('click', function(){
 if ( $('#title').val() == '' || $('#text').val() == '' ) {
  alert('Заполните форму!');
 }else{
  $.ajax({
    url:'/post',
    method:'POST',
    data:{
      name: '{{ Auth::user()->name }}',
      title: $('#title').val(),
      text: $('#text').val(),
      cat: 'news',

    },
    success: function(){
      $('#info').text('done');
      $('#title').val('');
      $('#text').val('');
    }

  });
  }
  
 });
</script>
</body>
</html>