<?php
	$v = file_get_contents('version.txt');
?><!doctype html><html lang="en">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,400i,500,700,900" rel="stylesheet"> 
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/main.css?<?= $v ?>">
	<link rel="stylesheet" href="css/lib.css?<?= $v ?>">
	<link rel="stylesheet" href="css/queries.css?<?= $v ?>">
	</head>
</head><body id="b">
<header><div class="cont">

<button id="toggleMain"><i class="fa fa-bars"></i></button>
<nav id="mainNav">
	<a href="#work">work</a>
	<a href="#lab">lab</a>
	<a href="#log">log</a>
	<a href="#info">info</a>
</nav>
</div><!--  end .container -->
</header><main>
<?php
	include 'partials/work.section.php';
	include 'partials/lab.section.php';
	include 'partials/log.section.php';
	include 'partials/info.section.html';
?>

</main><footer>
</footer>
	<script src="js/jquery_3.1.1.min.js"></script>
	<script src="js/functions.js?<?= $v ?>"></script>
</body></html>
