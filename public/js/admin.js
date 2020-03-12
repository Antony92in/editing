$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$('button').on('click', function(){
 if ( $('#title').val() == '' || $('#text').val() == '' || $('#game').val() == null ) {
  alert('Заполните форму!');
}else{
  $.ajax({
    url:'/post',
    method:'POST',
    data:{
      name: $('#name').val(),
      title: $('#title').val(),
      text: $('#text').val(),
      cat: $('#cat').val(),
      game: $('#game').val(),

    },
    success: function(msg){
      $('#info').text('Добавлено');
      $('#title').val('');
      $('#text').val('');
    }

  });
}

});