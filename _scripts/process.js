$(document).ready(function(){
	var width 		= $('.container').width(),
		bubble 		= $('.bubbles li'),
		bubPos 		= bubble.position().left;

	$( ".selector" ).slider({
		max: width,
		slide: function(event, ui){

			var slideVal 	= $(this).slider('values', 0);
			$('.bubbles li').each(function(i){
				if($(this).position().left <= slideVal){
					console.log(this);
					$(this).children('div').addClass('pop');
					setTimeout(function(){
						$('.bubbles li div span').css({
							opacity:'1',
							top: '100px'
						})
					},250);
				}else {
						$('.bubbles li div span').css({
							opacity:'1',
							top: '100px'
						})
					$(this).children('div').removeClass('pop');
				}
			});

		}
	});
});