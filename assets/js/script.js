/**
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 *
 * @package   elementor circle
 */

 jQuery(document).ready(function ($) {

	var container, button, menu, links, i, len;

	container = document.getElementById('site-navigation');
	if (!container) {
		return;
	}

	button = container.getElementsByTagName('button')[0];
	if ('undefined' === typeof button) {
		return;
	}

	menu = container.getElementsByTagName('ul')[0];

	// Hide menu toggle button if menu is empty and return early.
	if ('undefined' === typeof menu) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute('aria-expanded', 'false');
	if (-1 === menu.className.indexOf('nav-menu')) {
		menu.className += ' nav-menu';
	}

	button.onclick = function () {
		if (-1 !== container.className.indexOf('toggled')) {
			container.className = container.className.replace(' toggled', '');
			button.setAttribute('aria-expanded', 'false');
			menu.setAttribute('aria-expanded', 'false');
		} else {
			container.className += ' toggled';
			button.setAttribute('aria-expanded', 'true');
			menu.setAttribute('aria-expanded', 'true');
		}
	};

	// Get all the link elements within the menu.
	links = menu.getElementsByTagName('a');

	// Each time a menu link is focused or blurred, toggle focus.
	for (i = 0, len = links.length; i < len; i++) {
		links[i].addEventListener('focus', toggleFocus, true);
		links[i].addEventListener('blur', toggleFocus, true);
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while (-1 === self.className.indexOf('nav-menu')) {

			// On li elements toggle the class .focus.
			if ('li' === self.tagName.toLowerCase()) {
				if (-1 !== self.className.indexOf('focus')) {
					self.className = self.className.replace(' focus', '');
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles 'focus' class to allow submenu access on tablets.
	 */
	(function (container) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

		if ('ontouchstart' in window) {
			touchStartFn = function (e) {
				var menuItem = this.parentNode,
					i;

				if (!menuItem.classList.contains('focus')) {
					e.preventDefault();
					for (var i = 0, len = menuItem.parentNode.children.length; i < len; ++i) {
						if (menuItem === menuItem.parentNode.children[i]) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove('focus');
					}
					menuItem.classList.add('focus');
				} else {
					menuItem.classList.remove('focus');
				}
			};

			for (var i = 0, len = parentLink.length; i < len; ++i) {
				parentLink[i].addEventListener('touchstart', touchStartFn, false);
			}
		}

	}(container));

	// header search
	var toggleButton = $('.search-wrapper-toggle');
	if (toggleButton.length) {
		toggleButton.on("click", function () {
			$('body > .site-wrapper > .search-wrapper').not(this).removeClass('search-active');
			$(this).toggleClass('search-active');
			$('body > .site-wrapper > .search-wrapper').slideToggle();
		});
	}

	// back to top
	jQuery(document).on('click', '.scrolltop', function (e) {
		e.preventDefault();
		jQuery('html, body').animate({
			scrollTop: 0
		}, 700);
	});
	jQuery(window).on('scroll', function () {
		if (jQuery(this).scrollTop() > 200)
			jQuery('.scrolltop').addClass('active');
		else
			jQuery('.scrolltop').removeClass('active');
	});

	// preloader 
	jQuery(document).ready(function ($) {
		$('.circle-preloader').fadeOut();
		$('.circle-preloader').delay(500).fadeOut('slow');
		$('body').delay(500).css({
			'overflow': 'visible'
		});
	});

	// quantity values
	$('form.cart').on('click', 'button.plus, button.minus', function () {
		// Get current quantity values
		var qty = $(this).closest('form.cart').find('.qty');
		var val = parseFloat(qty.val());
		var max = parseFloat(qty.attr('max'));
		var min = parseFloat(qty.attr('min'));
		var step = parseFloat(qty.attr('step'));

		// Change the value if plus or minus
		if ($(this).is('.plus')) {
			if (max && (max <= val)) {
				qty.val(max);
			} else {
				qty.val(val + step);
			}
		} else {
			if (min && (min >= val)) {
				qty.val(min);
			} else if (val > 1) {
				qty.val(val - step);
			}
		}

	});
})