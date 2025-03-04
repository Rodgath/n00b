

jQuery(document).ready(function($) {

	$('.navbar-nav a.dropdown-toggle').on('hover', function(e) {

		var $el = $(this),
			$parent = $el.offsetParent(),
			$parentUL = $el.closest('.dropdown-menu'),
			$subMenu = $el.next('.dropdown-menu'),
			$offset = $el.offset(),
			$offLeft = $offset.left,
			$elWidth = $el.outerWidth(),
			$docW = $('.wrapper')[0].offsetWidth;

		if (!$el.next().hasClass('show')) {
			$el.parents('.dropdown-menu').first().find('.show').removeClass('show');
		}

		$subMenu.toggleClass('show');

		$el.parent('li').toggleClass('show');

		$el.parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
			$('.dropdown-menu .show').removeClass('show');
		});

		if (!$parent.parent().hasClass('navbar-nav')) {
			$subMenu.css({ 'top': $el[0].offsetTop });
		}

		var isEntirelyVisible = ($offLeft + $elWidth <= $docW);

		if ( ! isEntirelyVisible ) {
			$subMenu.addClass('dropdown-menu-right');
			$subMenu.css({ 'right': $parent.outerWidth()*($parentUL.data('depth') + 1) });
		} else {
			$subMenu.css({ 'left': $parent.outerWidth()*($parentUL.data('depth') + 1) });
		}

		return false;
	});

});