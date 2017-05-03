<div class="single-page-agile-main">
    <div class="container">

        <div class="single-page-agile-info">
            <!-- /movie-browse-agile -->
            <div class="show-top-grids-w3lagile">
                <div class="col-sm-8 single-left">



                    <div class="song">
                        <div class="song-info">
                            <h3><?=clearTitle($video->title.". ".ucfirst($video->keyword))?></h3>
                        </div>
                        <?php 
                            if (!empty($ads_video['content_top_ads'])) {
                                echo $ads_video['content_top_ads'];
                            }
                        ?>
                        <div class="lid">
                            <?php if(strlen(ucfirst(getLid(clear($video->description))))>5) echo ucfirst(getLid(clear($video->description))).".";?>
                        </div>
                        <div class="clearfix"> </div>
                        <br>
                        <div class="video-grid-single-page-agileits">
                            <div class="cont">
                                <iframe src="https://www.youtube.com/embed/<?=$video->video_id?>" allowfullscreen class="video"></iframe>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        <br>
                        <?php 
                            if (!empty($ads_video['content_bottom_ads'])) {
                                echo $ads_video['content_bottom_ads'];
                            }
                        ?>
                        <br>
                        <div class="video-details">
                            <span><?=clear(parseUrl($video->description))?></span>
                        </div>
                         <br>
                        <?php 
                            if (!empty($ads_video['content_descr_ads'])) {
                                echo $ads_video['content_descr_ads'];
                            }
                        ?>
                        <br>

                        <?php 
                            if (!empty($ads_video['content_link_ads'])) {
                                echo $ads_video['content_link_ads'];
                            }
                        ?>
                        <br>
                    </div>




                    <div class="clearfix"> </div>
                    <br>
                    <div class="wthree-related-news-left">
                        <h4>Related News</h4>
                        <div class="wthree-news-top-left">

                            <?php foreach($related_video as $video_item): ?>
                                <?php if($video_item->id != $video->id): ?>
                                    <?php
                                    $url_cat = trim(str_replace(' ', '-', $video_item->category));
                                    $clear_title=preg_replace("/[^a-z0-9]/i"," ",$video_item->title.". ".$video_item->keyword);
                                    $url_title = str_replace(' ', '-', strtolower(trim(preg_replace("/ +/"," ",$clear_title))));
                                    $url = "/news/$url_cat/{$video_item->id}_{$url_title}";
                                    ?>

                                    <div class="col-md-6 w3-agileits-news-left">
                                        <div class="col-sm-5 wthree-news-img">
                                            <a href="<?=$url?>"><img src="<?= "/img/mqdefault/$video_item->video_id.jpg" ?>" alt=""></a>
                                        </div>
                                        <div class="col-sm-7 wthree-news-info">
                                            <h5><a href="<?=$url?>"><?=$video_item->title.". ".ucfirst($video_item->keyword)?></a></h5>

                                        </div>
                                        <div class="clearfix"> </div>
                                        <br>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>





                            <div class="clearfix"> </div>
                        </div>
                    </div>

                    <?php 
                            if (!empty($ads_video['footer_ads'])) {
                                echo $ads_video['footer_ads'];
                            }
                    ?>
                </div>
                <?php include(ROOT.'/views/snippets/sidebar.php') ?>
                <div class="clearfix"> </div>
            </div>
            <!-- //movie-browse-agile -->
            <!--body wrapper start-->

        </div>
        <!-- //w3l-latest-movies-grids -->
    </div>
</div>
