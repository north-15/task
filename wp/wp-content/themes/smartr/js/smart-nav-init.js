jQuery(document).ready(function() {
jQuery(".navbar-default").headroom({
		// scroll tolerance in px before state changes
		"tolerance": 0,

		// vertical offset in px before element is first unpinned
		"offset": 124, /* set this to height of your header */

		"classes": {
			// when element is initialised
			"initial": "animated",

			// when scrolling up
			"pinned": "slideDown",

			// when scrolling down
			"unpinned": "slideUp",

			// when above offset
			"top": "headroom--top",

			// when below offset
			"notTop": "headroom--not-top"
		}
	});
	});