$(document).ready(function() {
	$('.js-like-article').on('click', function(e) {
		e.preventDefault(); // so browser doesnt follow the link

		var $link = $(e.currentTarget); // link that was just clicked
		$link.toggleClass('fa-heart-o').toggleClass('fa-heart'); // switches class depending upon state

		$.ajax({
			method: 'POST',
			url: $link.attr('href')
		}).done(function(data){
			$('.js-like-article-count').html(data.hearts);
		})		
	});
});
