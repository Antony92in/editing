<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/welcome.css">
        <title>Laravel</title>
    </head>
    <body>
        <div class="main">
            <div class="header">
                <h1>Название сайта</h1>
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
                <h3>Sidebar</h3>
                <a href="#">Новости</a><br>
                <a href="#">Конкурсы</a><br>
                <a href="#">Настройки игр</a><br>
                <a href="#">Гайды</a><br>
            </div>
            <div class="content">
                <h3>Последние новости</h3>
               
            </div>

            <div class="right">
                <h3>Контакты</h3>
                <p>Группа ВК</p>
                <p>Группа discord</p>
                <p>Наш Youtube канал</p>
            </div>
        </div>

        
    </body>
</html>
