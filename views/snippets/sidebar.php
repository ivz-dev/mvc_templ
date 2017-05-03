<div class="col-md-4 single-right">

    <?php
    if (!empty($ads_video['sidebar_ads'])) {
        echo $ads_video['sidebar_ads'];
    }
    ?>
    <br>

    <h3>Recent videos</h3>
    <div class="single-grid-right">

        <?php if (!empty($recent_video)): ?>

            <?php foreach ($recent_video as $item): ?>
                <?php
                $url_cat = trim(str_replace(' ', '-', $item->category));
                $clear_title=preg_replace("/[^a-z0-9]/i"," ",$item->title.". ".$item->keyword);
                $url_title = str_replace(' ', '-', strtolower(trim(preg_replace("/ +/"," ",$clear_title))));
                $url = "/news/$url_cat/{$item->id}_{$url_title}";
                ?>

                <div class="single-right-grids">
                    <div class="col-md-4 single-right-grid-left">
                        <a href="<?=$url?>"><img src="<?= "/img/default/$item->video_id.jpg" ?>" alt=""></a>
                    </div>
                    <div class="col-md-8 single-right-grid-right">
                        <a href="<?=$url?>" class="title"> <?=$item->title." ".ucfirst($item->keyword)?></a>
                        <p class="views"><?=rand(100, 1000)?> views</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            <?php endforeach;?>
        <?php endif; ?>


    </div>

    <?php
    if (!empty($ads_video['sidebar_ads_bottom'])) {
        echo $ads_video['sidebar_ads_bottom'];
    }
    ?>
    <br>
</div>