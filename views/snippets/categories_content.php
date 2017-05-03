<div class="browse-agile-w3ls general-w3ls">
    <div class="tittle-head">
        <div class="container">
            <h4 class="latest-text">Category</h4>
            <div class="agileits-single-top">
                <ol class="breadcrumb">
                    <li><a href="/category">All<a/></li>
                    <?php foreach ($cat_list as $catItem): ?>
                        |
                        <li><a href="/category/<?=str_replace(' ', '-' ,$catItem->category)?>"><?=ucfirst($catItem->category)?><a/></li>
                    <?php endforeach; ?>

                </ol>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- /latest-movies1 -->
        <div class="browse-inner-come-agile-w3">

            <?php if (!empty($data)):?>
                <?php foreach ($data as $item): ?>
                    <?php
                    $url_cat = trim(str_replace(' ', '-', $item->category));
                    $clear_title=preg_replace("/[^a-z0-9]/i"," ",$item->title.". ".$item->keyword);
                    $url_title = str_replace(' ', '-', strtolower(trim(preg_replace("/ +/"," ",$clear_title))));
                    $url = "/news/$url_cat/{$item->id}_{$url_title}";
                    ?>

                    <div class="col-md-4 w3l-movie-gride-agile">
                        <a href="<?=$url?>" class="hvr-shutter-out-horizontal"><img src="<?= "/img/mqdefault/$item->video_id.jpg" ?>" class="you-img" title="album-name" alt=" ">
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1">
                            <div class="w3l-movie-text">
                                <h6><a href="<?=$url?>"><?=clearTitle($item->title.". ".ucfirst($item->keyword))?></a></h6>
                            </div>
                        </div>

                    </div>


                <?php endforeach; ?>
            <?php endif; ?>

            <div class="clearfix"> </div>
        </div>

    </div>
</div>