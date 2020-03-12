		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('#com').on('click', function(){
			$.ajax({
				url: '/addcom',
				method: 'POST',
				data:{
					post_id: $('#post_id').val(),
					name: $('.name').val(),
					text: $('#text').val()
				},
				success: function(msg){
					$('#info').text(msg);
					$('#text').val('');
					$('.name').val('');

				}
			})
			
		});

		$('#redact').on('click', function(){
			$('.redt').toggleClass('red');
		})

		$('#sendred').on('click', function(){
			$.ajax({
				url:'/redact',
				method:'POST',
				data:{
					id: $('#post_id').val(),
					title: $('#redtitle').val(),
					text: $('#redtext').val(),
				},
				success: function(){
					location.reload();
				}

			});
		});

		$('#delete').on('click', function(){
			if (confirm('Удалить статью?')) {
				$.ajax({
					url: '/delete',
					method: 'POST',
					data:{
						id: $('#post_id').val(),
					},
					success: function(){
						location.replace('/');
					}
				});
			}
		});
