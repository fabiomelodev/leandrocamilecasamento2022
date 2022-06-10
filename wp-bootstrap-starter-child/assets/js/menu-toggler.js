(function($){
	// $('.btn-menu .btn').on('click', function() {
	// 	$(this).toggleClass('active')
	// 	$(this).toggleClass('not-active')
	// 	$('body').toggleClass('overflow-hidden')
	// 	$('.menu-mobile').toggleClass('active')
	// })

	// $('.menu-mobile .nav-link').on('click', function() {
	// 	$('body').toggleClass('overflow-hidden')
	// 	$('.btn-menu .btn').toggleClass('active')
	// 	$('.btn-menu .btn').toggleClass('not-active')
	// 	$('.menu-mobile').toggleClass('active')
	// })

	$( '.js-icon-open' ).on( 'click', function() {
		$( this ).toggleClass( 'is-active' )
		$( '.js-menu' ).toggleClass( 'is-active' )
		$( '.js-menu-list' ).toggleClass( 'is-active' )
	})
})(jQuery)