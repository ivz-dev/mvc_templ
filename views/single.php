
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=clearTitle($video->title.". ".ucfirst($video->keyword))?></title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name='keywords' content="<?=$video->keywords?>"/>
    <meta name='description' content='Read on: <?=ucfirst(domain)?>. <?=ucfirst($video->title).". ".ucfirst($video->keyword)?> - in <?=$video->category?>' />
    <meta property="og:image" <?= "content=\"http://{$_SERVER['SERVER_NAME']}/img/hqdefault/$video->video_id.jpg\"" ?> />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="480" />
    <meta property="og:image:height" content="360" />

    <!-- //for-mobile-apps -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/news.css" rel="stylesheet" type="text/css" media="all" />

    <link href="/css/single.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- banner-bottom-plugin -->

    <!-- //banner-bottom-plugin -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="/js/move-top.js"></script>
    <?php 
        if (!empty($ads_video['header_script'])) {
            echo $ads_video['header_script'];
        }
    ?>
</head>

<body>

<?php include(ROOT.'/views/snippets/header.php') ?>
<div class="container">
<?php 
    if (!empty($ads_video['header_ads'])) {
        echo $ads_video['header_ads'];
    }
?>
</div>

<?php include(ROOT.'/views/snippets/content_news.php') ?>
<?php include(ROOT.'/views/snippets/footer.php') ?>

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>