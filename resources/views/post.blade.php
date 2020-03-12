<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/post.css">
	<title>Post</title>
</head>
<body>
	<br>
	<div class="main">
		<div class="header">
			<h1>{{ $post->title }}</h1>
		</div>
		<div class="content">
			<p id="cont">
				@php

				echo preg_replace('{http(\S+)jpg}', '<br> <img src="$0" height="50%" width="50%"> <br>', $post->text)

				@endphp
			</p>
			<hr>
			@auth
			@if(Auth::user()->status == 'admin')
			<button id="redact">Редактировать</button>
			<div class="redt red">
				<textarea class="form-control" id="redtitle">{{ $post->title }}</textarea>
				<textarea class="form-control" id="redtext">{{ $post->text }}</textarea>
				<button id="sendred">Отправить</button>
				<button id="delete">Delete</button>

			</div>
			@endif
			@endauth
			<br><br>
			<a href="/" class="btn btn-primary btn-sm">Вернуться на главную</a>
		</div>
		
		<div class="comments">
			<h4>Комментарии</h4>
			
			@foreach($comments as $comment)

			<h4>{{$comment->author}}</h4>

			{{ $comment->text }}

			<br>
			@auth
			@if(Auth::user()->status == 'admin')
			<form method="POST" action="{{ action('CommentsController@delete',['id' => $comment->id ]) }}">
				@csrf
				<input type="submit" name="" value="Удалить">
			</form>
			@endif
			@endauth
			<hr>

			@endforeach

			<hr>
			
			<div class="form">
				<h4>Добавить комментарий</h4>
				
				<div class="form-group">
					<input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
					@guest
					<label for="exampleInputEmail1">Ваш никнейм</label>
					<input type="text" class="name">
					@endguest
					@auth
					<input type="hidden" class="name" value="{{ Auth::user()->name }}">
					@endauth
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Текст</label>
					<input type="text" class="form-control" id="text" name="comment">
				</div>
				<button id="com" class="btn btn-primary">Добавить</button>
				
			</div>
			
			
			<div id="info"></div>
		</div>
	</div>



	<script type="text/javascript" src="js/post.js">
	</script>
</body>
</html>


