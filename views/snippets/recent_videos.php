<!-- general -->
<div class="general">
    <div class="container">
        <h4 class="latest-text w3_latest_text">Recent videos</h4>
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <div  class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in"  >
                    <div class="w3_agile_featured_movies">

                        <?php if (!empty($recent_video)): ?>
                            <?php foreach ($recent_video as $item): ?>
                                <?php
                                $url_cat = trim(str_replace(' ', '-', $item->category));
                                $clear_title=preg_replace("/[^a-z0-9]/i"," ",$item->title.". ".$item->keyword);
                                $url_title = str_replace(' ', '-', strtolower(trim(preg_replace("/ +/"," ",$clear_title))));
                                $url = "/news/$url_cat/{$item->id}_{$url_title}";
                                ?>

                                <div class="col-md-4 w3l-movie-gride-agile">
                                    <a href="<?=$url?>" class="hvr-shutter-out-horizontal"><img src="<?= "/img/mqdefault/$item->video_id.jpg" ?>" class="img-responsive you-img" alt=" " />
                                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
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
        </div>
    </div>
</div>
<!-- //general -->

