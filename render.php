<?php 
	ob_start();

?><!doctype html><html lang="en">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,400i,500,700,900" rel="stylesheet"> 
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/lbp.css">
	<link rel="stylesheet" href="css/main.css">
	</head>
</head><body id="b">
<?php // include 'partials/bubbles.svg' ?>
<header><div class="cont">
<?php // include 'partials/sun.svg' ?>

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
	include 'partials/lab.section.html';
	include 'partials/log.section.php';
	include 'partials/info.section.html';
?>	
</main><footer>
</footer>
	<script src="js/jquery_3.1.1.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script src="js/functions.js"></script>
	<script type="application/javascript">
</script></body></html><?php
	$mark = ob_get_clean();
	file_put_contents('index.html', $mark);
