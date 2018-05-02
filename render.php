<?php
ob_start();

include 'dev.php';

$mark = ob_get_clean();
file_put_contents('index.html', $mark);
?>