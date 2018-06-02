<?php include 'dataset.php' ?> 

<section id="work">
<?php 
foreach ($work as $i=>$w) : 
	$next = ($i+1==count($work))? 0 : ($i+1); ?>
	<article class="work-proj" id="work/<?=$i?>" style="background-color: <?=$w["color"]?>">
		<a class="backTo" href="#work"> <i class="fa fa-level-up-alt"></i> back </a>
		<a class="nextArticle" href="#work/<?= $next ?>"> <i class="fa fa-chevron-right"></i> </a>
		<?php if(isset($w["banner"])): ?>
			<img class="banner" src="proj/banners/<?= $w['banner'] .'?'. $version ?>">
		<?php endif;?>
		<div class="cont">
			<h2> <b>0<?=$i?></b> <?= $w["title"] ?></h2>
			<table class="stats">
				<?php if(isset($w["client"])): ?>
					<tr><th>client</th><td><?= $w["client"] ?></td></tr>
				<?php endif; 
					if(isset($w["type"])): ?>
					<tr><th>proj_type</th><td><?= $pType[$w["type"]] ?></td></tr>
				<?php endif; 
					if(isset($w["link"]) && isset($w["link-txt"])): ?>
					<tr><th>link</th>
						<td> 
							<a href="<?= $w["link"] ?>"> <?= $w["link-txt"] ?> </a>
						</td> </tr>
				<?php endif; 
					if(isset($w["role"])): ?>
					<tr><th>role</th>
						<td>
							<?php foreach($w["role"] as $role){ 
								echo $pRole[$role] ."; "; 
							} ?>
						</td></tr>
				<?php endif; 
					if(isset($w["tech"])): ?>
					<tr><th>tech</th>
						<td>
							<?php foreach($w["tech"] as $tech){ 
								echo $pTech[$tech] ."; "; 
							} ?>
						</td></tr>
				<?php endif; 
					if(isset($w["date"])): ?>
					<tr><th>date</th>
						<td> <?= $w["date"]; ?> </td></tr>
				<?php endif; ?>
			</table>
			<?php if(isset($w["path"])): ?>
			<div class="description">
				<?php if(file_exists("proj/{$w['path']}desc.html")) {
					include "proj/{$w['path']}desc.html";
				} ?>
			</div>
				<?php if(isset($w["img"])): ?>
				<div class="gall">
					<?php foreach($w["img"] as $img): ?>
						<a href="proj/<?= $w['path']?><?= $img ?>-min.png"><img src="proj/<?= $w['path']?>thumbs/<?= $img ?>-min.png"></a>
					<?php endforeach; ?>
					<div class="gall-cont">
						<img src="proj/<?= $w['path']?><?= $w['img'][0] ?>-min.png">
					</div>
				</div> <br>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</article>
<?php endforeach; ?>

<div class="cont">
	<div class=title><h1>work <small>projects</small></h1></div>
	<ul id="projNav" class="fix">
	<?php foreach ($work as $i=>$w): ?>
		<li class="<?= $w['c-name'] ?>" style="background-color: <?=$w["color"]?>">
			<img src="proj/banners/<?= $w['banner'] ?>">
			<a href="#work/<?= $i ?>"> 
				<b> 0<?= $i ?> </b> <?= $w["title"] ?>
				<small><i class="fa fa-long-arrow-alt-right"></i> project</small> 
			</a>
		</li>
	<?php endforeach; ?>
	</nav>
</div>

<!-- <div class="cont cta">
	<p>Let's <a href="#info">have a talk</a>, and discuss your next project. I might be able to help. </p>
</div> -->
</section>
