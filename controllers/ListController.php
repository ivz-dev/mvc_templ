<?php

include_once ROOT.'/models/News.php';

class ListController
{
    public function actionList($category='all', $number=0)
    {
        if($category=='') $category='all';
        $result = News::getTopicPage($category, $number, 12);

        $popular_video = $result->popular_video;
        $recent_video = $result->recent_video;
        $cat_list = $result->cat_list;
        $count = $result->count;
        $data = $result->topic_list;
        $ads = $result->ads;

        if ($data)
        {
            require_once(ROOT.'/views/category.php');
        }
        else
        {
            require_once(ROOT.'/views/404.php');
        }

        return true;
    }

    public function actionMain()
    {
        $result = News::getMainPage(0, 25);
        $popular_video = $result->popular_video;
        $recent_video = $result->recent_video;
        $data = $result->data;
        $ads = $result->ads;
        require_once(ROOT.'/views/index.php');
        return true;
    }

    public function actionError()
    {
        $popular_video = News::getPopularVideo();
        $recent_video = News::getRecentVideo();
        require_once(ROOT.'/views/404.php');
    }

}
