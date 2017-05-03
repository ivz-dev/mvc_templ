
<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <!-- //for-mobile-apps -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/contactstyle.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/faqstyle.css" type="text/css" media="all" />
    <link href="/css/single.css" rel='stylesheet' type='text/css' />
    <link href="/css/medile.css" rel='stylesheet' type='text/css' />
    <!-- banner-slider -->
    <link href="/css/jquery.slidey.min.css" rel="stylesheet">
    <!-- //banner-slider -->
    <!-- pop-up -->
    <link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
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
    if (!empty($ads))
    {
        echo $ads[0]->header_script_list;
    }
    ?>
</head>

<body>

<?php include(ROOT.'/views/snippets/header.php') ?>
<br><br>
<div class="movie-browse-agile">
    <!--/browse-agile-w3ls -->
    <?php include(ROOT.'/views/snippets/categories_content.php') ?>
    <?php include(ROOT.'/views/snippets/pagination.php') ?>
</div>

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