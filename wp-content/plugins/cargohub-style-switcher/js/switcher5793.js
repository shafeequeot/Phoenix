(function($) {
	$(document).ready(function() {
		// Switcher
		jQuery('#demo_changer .demo-icon').click(function() {
			if (jQuery('.demo_changer').hasClass("active")) {
				jQuery('.demo_changer').animate({
					"left": "-320px"
				}, function() {
					jQuery('.demo_changer').toggleClass("active");
				});
			} else {
				jQuery('.demo_changer').animate({
					"left": "0px"
				}, function() {
					jQuery('.demo_changer').toggleClass("active");
				});
			}
		});

		// Color Scheme
		var sclass = '',
			colorActive = 'default';

		$('#styleswitch_area').on('click', '.styleswitch', function (e) {
			e.preventDefault();
			var color = $(this).data('rel'),
				href = $('#cargohub-color-switcher-css').attr('href');

			$('.styleswitch').removeClass('selected');
			$(this).addClass('selected');
			href = href.replace( colorActive, color );
			$('#cargohub-color-switcher-css').attr('href', href);
			colorActive = color;

			var url = $( this ).parent().find( '.hidden-url').val();

			if( color != '' ) {
				$( '.site-header .logo .logo-dark').attr( 'src', url + color + '_dark.png' );
				$( '.site-header .logo .logo-light').attr( 'src', url + color + '_light.png' );
				$( '.contact-widget .footer-logo img').attr( 'src', url + color + '_light.png' );

			} else {
				$( '.site-header .logo .logo-dark').attr( 'src', url + color + 'default_dark.png' );
				$( '.site-header .logo .logo-light').attr( 'src', url + color + 'default_light.png' );
				$( '.contact-widget .footer-logo img').attr( 'src', url + color + 'default_light.png' );
			}
		});

	});
})(jQuery);
