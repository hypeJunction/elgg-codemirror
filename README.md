CodeMirror Code Editor
======================
![Elgg 2.3](https://img.shields.io/badge/Elgg-2.3.x-orange.svg?style=flat-square)

Provides a CodeMirror input type.

## Usage

```php
echo elgg_view_field([
    '#type' => 'codemirror',
    'name' => 'code',
]);

$code = get_input('code', '', false);
```