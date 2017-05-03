<div class="related-videos">
    <h6>Related-Videos</h6>
    <div class="grids">
        <?php foreach($related_video as $video_item): ?>
            <?php if($video_item->id != $video->id): ?>
            <?php
                $url_cat = trim(str_replace(' ', '-', $video_item->category));
                $clear_title=preg_replace("/[^a-z0-9]/i"," ",$video_item->title.". ".$video_item->keyword);
                $url_title = str_replace(' ', '-', strtolower(trim(preg_replace("/ +/"," ",$clear_title))));
                $url = "/news/$url_cat/{$video_item->id}_{$url_title}";
            ?>

            <div class="grid">
                <a href="<?=$url?>">
                    <div class="main-caption"><h3><?=$video_item->title.". ".ucfirst($video_item->keyword)?></h3></div>
                    <img src="<?= "/img/mqdefault/$video_item->video_id.jpg" ?>" title="video-name" />
                    <!--<div class="time">
                        <span>00:10</span>
                    </div>-->
                    <div class="grid-info">

                        <div class="video-watch">
                            <a href="<?=$url?>">Watch Now</a>
                        </div>
                        <div class="clear"> </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
        <?php endforeach; ?>


    </div>
</div>
<div class="clear"> </div>
