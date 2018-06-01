<?php
ob_start();

$v = file_get_contents('version.txt'); // get current version
include 'dev.php';

$markup = ob_get_clean();
file_put_contents('index.html', $markup);
file_put_contents('version.txt', $v + 1); // increment version number to clear caches
?>