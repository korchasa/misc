#!/usr/bin/php
<?php
require_once('./../src/DokuwikiConverter.class.php');

$content = file_get_contents(__DIR__.'/input.txt');

$converter = new DokuwikiConverter();

file_put_contents(__DIR__.'/result.markdown', $converter->convert($content));

?>
