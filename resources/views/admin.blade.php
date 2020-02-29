<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="header">
        <h2>Панель управления</h2>
    </div>
    <div class="main">
      <div class="panel">
       <p><a href="#">News</a></p>
      </div>
      <div class="content">
        <div id="hidden" class="hidden">
          <div class="adit">
            <div class="news">
          <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="Заголовок" >
            </div>
            <textarea class="form-control" aria-label="With textarea" placeholder="Текст"></textarea>
            <br>
            <button type="button" class="btn btn-secondary btn-sm">Добавить</button>
            </div>
            
          </div>
        </div>
      </div>
    </div>


<script type="text/javascript">
  $('a').on('click', function(){
    $('#hidden').toggleClass( "hidden" );
  })
</script>
</body>
</html>