<?php if (!empty($popular_video)): ?>

	<?php
		$url_cat = trim(str_replace(' ', '-', $popular_video[0]->category));
		$clear_title=preg_replace("/[^a-z0-9]/i"," ",$popular_video[0]->title.". ".$popular_video[0]->keyword);
		$url_title = str_replace(' ', '-', strtolower(trim(preg_replace("/ +/"," ",$clear_title))));
		$url = "/news/$url_cat/{$popular_video[0]->id}_{$url_title}";
	?>

	<div class="popular">
		<h3>Popular Videos</h3>
		<!--<p><img src="/images/l1.png" title="likes"><?=rand(100, 1000)?></p>-->
		<div class="clear"> </div>
	</div>
	<div class="grid1">
		<a href="<?=$url?>"><h3><?=$popular_video[0]->title?></h3>
		<img src="<?= "/img/mqdefault/{$popular_video[0]->video_id}.jpg" ?>" title="video-name">
		<div class="grid-info">
			<div class="clear"> </div>
		</div>
		</a>
	</div>
	<div class="clear"> </div>
<?php endif; ?>
