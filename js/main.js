$('.card a').on('mouseover', function() {
	if (!$(this).hasClass('badge')) {
		$(this).closest('.card').find('.card-img-top').addClass('hover');
	}
})

$('.card a').on('mouseout', function() {
	if (!$(this).hasClass('badge')) {
		$(this).closest('.card').find('.card-img-top').removeClass('hover');
	}
})