<?php

elgg_load_css('input/codemirror.css');

$vars['class'] = elgg_extract_class($vars, 'elgg-input-codemirror');

$config = elgg_extract('config', $vars, [
    'lineNumbers' => true,
    'lineWrapping' => true,
    'mode' => 'htmlmixed',
    'theme' => 'default',
]);

unset($vars['config']);

$vars['data-config'] = json_encode($config, JSON_OBJECT_AS_ARRAY);

echo elgg_view('input/plaintext', $vars);

?>
<script>
	require(['input/codemirror'], function(init) {
		init();
    });
</script>
