<?php

require_once __DIR__ . '/autoloader.php';

elgg_register_event_handler('init', 'system', function () {
	elgg_register_css('input/codemirror.css', elgg_get_simplecache_url('input/codemirror.css'));
	elgg_extend_view('input/codemirror.css', 'codemirror/lib/codemirror.css', 100);
});