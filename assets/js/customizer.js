/**
 * Customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @package   elementor circle
 */

(function ($) {
	// Site title and description.
	wp.customize('blogname', function (value) {
		value.bind(function (to) {
			$('.site-title a').text(to);
		});
	});
	wp.customize('blogdescription', function (value) {
		value.bind(function (to) {
			$('.site-description').text(to);
		});
	});
})(jQuery);


jQuery(document).ready(function ($) {
	// elementor responcive preview 
	"use strict";
	$('.circle-devices-preview').find('button').on('click', function (event) {
		if ($(this).hasClass('preview-desktop')) {
			$('.circle-devices-preview').find('.preview-desktop').addClass('active');
			$('.circle-devices-preview').find('.preview-tablet').removeClass('active');
			$('.circle-devices-preview').find('.preview-mobile').removeClass('active');
			$('.device-size-desktop').addClass('active');
			$('.device-size-tablet').removeClass('active');
			$('.device-size-mobile').removeClass('active');
			$('.wp-full-overlay-footer .devices button[data-device="desktop"]').trigger('click');
		} else if ($(this).hasClass('preview-tablet')) {
			$('.circle-devices-preview').find('.preview-tablet').addClass('active');
			$('.circle-devices-preview').find('.preview-desktop').removeClass('active');
			$('.circle-devices-preview').find('.preview-mobile').removeClass('active');
			$('.device-size-desktop').removeClass('active');
			$('.device-size-tablet').addClass('active');
			$('.device-size-mobile').removeClass('active');
			$('.wp-full-overlay-footer .devices button[data-device="tablet"]').trigger('click');
		} else {
			$('.circle-devices-preview').find('.preview-mobile').addClass('active');
			$('.circle-devices-preview').find('.preview-desktop').removeClass('active');
			$('.circle-devices-preview').find('.preview-tablet').removeClass('active');
			$('.device-size-desktop').removeClass('active');
			$('.device-size-tablet').removeClass('active');
			$('.device-size-mobile').addClass('active');
			$('.wp-full-overlay-footer .devices button[data-device="mobile"]').trigger('click');
		}
	});
	$(' .wp-full-overlay-footer .devices button ').on('click', function () {
		var device = $(this).attr('data-device');
		$('.circle-devices-preview').find('.preview-' + device).trigger('click');
	});
});