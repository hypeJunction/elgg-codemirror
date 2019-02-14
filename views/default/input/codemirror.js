define(function (require) {
	var $ = require('jquery');
	var CodeMirror = require('codemirror/lib/codemirror');

	var lib = {
		init: function () {
			$('.elgg-input-codemirror').each(function () {
				var $el = $(this);

				if ($el.data('cm')) {
					return;
				}

				$el.data('cm', true);

				var config = $el.data('config');
				var mode = config.mode || 'htmlmixed';

				require(['codemirror/mode/' + mode + '/' + mode], function () {
					CodeMirror.fromTextArea($el[0], config);
				});
			});
		}
	};

	return function () {
		lib.init();
	}
});