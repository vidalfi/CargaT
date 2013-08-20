<?php
ini_set('zlib.output_compression','On');
ini_set('zlib.output_compression_level','6');
Header("Cache-Control: must-revalidate");
$offset = 60 * 60 * 24 * 25;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
header('Content-Type:text/html;charset=utf-8');
?>
