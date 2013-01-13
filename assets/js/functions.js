
(function($) {
	/* MOBILE COLLAPSE MENU */
	$.fn.collapsable = function(options) {
		return this.each(function() {
			var obj = $(this);
			var tree = obj.next('.nav');
			obj.click(function() {
				if( obj.is(':visible') ){tree.slideToggle('fast');}
				if( obj.is(':hidden') ){tree.toggle();}
			});
		});
	};
})(jQuery);