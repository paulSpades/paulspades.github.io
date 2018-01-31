<?php include 'dataset.php' ?> 


<section id="work">

<?php foreach ($work as $i=>$w) : ?>
	<article class="work-proj" id="work/<?=$i?>">
		<?php if(isset($w["banner"])): ?>
			<img id="banner" src="proj/banners/<?= $w['banner'] ?>">
		<?php endif;?>
		<div class="cont">
			<h2> 
				<b>0<?=$i?></b> <?= $w["title"] ?> <br>
				<a href="#work" class="backTo">
					<i class="fa fa-arrow-circle-left"></i> WORK
				</a>
			</h2>
			<table class="stats">
				<?php if(isset($w["client"])): ?>
					<tr><th>client</th><td><?= $w["client"] ?></td></tr>
				<?php endif; if(isset($w["type"])): ?>
					<tr><th>proj_type</th><td><?= $pType[$w["type"]] ?></td></tr>
				<?php endif; if(isset($w["link"]) && isset($w["link-txt"])): ?>
					<tr>
						<th>link</th>
						<td> 
							<a href="<?= $w["link"] ?>"> <?= $w["link-txt"] ?> </a>
						</td>
					</tr>
				<?php endif; if(isset($w["role"])): ?>
					<tr>
						<th>role</th>
						<td>
							<?php foreach($w["role"] as $role){ 
								echo $pRole[$role] ."; "; 
							} ?>
						</td>
					</tr>
				<?php endif; if(isset($w["tech"])): ?>
					<tr>
						<th>tech</th>
						<td>
							<?php foreach($w["tech"] as $tech){ 
								echo $pTech[$tech] ."; "; 
							} ?>
						</td>
					</tr>
				<?php endif; if(isset($w["date"])): ?>
					<tr>
						<th>date</th>
						<td> <?= $w["date"]; ?> </td>
					</tr>
				<?php endif; ?>
			</table>
			<?php if(isset($w["path"])): ?>
				<div class="description">
					<?php if(file_exists("proj/{$w['path']}desc.html")) {
						include "proj/{$w['path']}desc.html";
					} ?>
				</div>
			<?php endif; ?>
		</div>
	</article>
<?php endforeach; ?>

<div class="cont">
	<h1>projects</h1>
	<ul id="projNav">
	<?php foreach ($work as $i=>$w): ?>
		<li class="<?= $w['c-name'] ?>">
			<img src="proj/banners/<?= $w['banner'] ?>">
			<a href="#work/<?= $i ?>"> 
				<b>0<?= $i ?></b> <?= $w["title"] ?>
				<small>[view project]</small> 
			</a>
		</li>
	<?php endforeach; ?>
	</nav>
</div>

<div class="cont cta">
	<p class="lead">Like what you're seeing? Let's <a href="#info">get to know each other</a> , have a cup of coffee and discuss your next project. I might be able to help. </p>
</div>

</section>