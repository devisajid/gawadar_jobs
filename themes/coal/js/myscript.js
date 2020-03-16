(function ($, Drupal) {

	'use strict';

	Drupal.behaviors.coal = {
		attach: function (context, settings) {
			var path = "http://localhost/coal/";
			Mousetrap.bind('ctrl+alt+c', function(e) {
				// your function here...
				window.location.href = path + 'node/add/customer';
			});
			Mousetrap.bind('ctrl+alt+e', function(e) {
				// your function here...
				window.location.href = path + 'node/add/employ';
			});
			Mousetrap.bind('ctrl+alt+w', function(e) {
				// your function here...
				window.location.href = path + 'node/add/weight_bridge';
			});
			Mousetrap.bind('ctrl+alt+v', function(e) {
				// your function here...
				window.location.href = path + 'node/add/expenses';
			});
			Mousetrap.bind('ctrl+alt+i', function(e) {
				// your function here...
				window.location.href = path + 'income-statement';
			});
		}
	};

})(jQuery, Drupal);