<?php
include_once ROOT.'/models/News.php';

class NewsController {
    public function actionView($category, $news)
    {
        $id = explode('_', $news)[0];
        $data_arr = News::getNewsById($id);

        if(!empty($data_arr->video[0]))
        {
            $video = $data_arr->video[0];
            if ($video->category=='')
            {
                $video->category='main';
            }
            $related_video = $data_arr->related_content;
            $popular_video = $data_arr->popular;
            $recent_video = $data_arr->recent;
            if (isset($data_arr->ads[0])) {
                $ads_video = (array)$data_arr->ads[0];
            }
            require_once(ROOT.'/views/single.php');
        }
        else
        {

            $related_video = $data_arr->related_content;
            $popular_video = $data_arr->popular;
            $recent_video = $data_arr->recent;
            require_once(ROOT.'/views/404.php');
        }

        return true;
    }

    public function actionService($param)
    {
        $result = News::getInformationPage();

        $information = $result->information[0];
        if (property_exists($information, $param))
        {
            $data = $information->$param;
            $title = $param;
            $popular_video = $result->popular_video;
            $recent_video = $result->recent_video;

            require_once(ROOT.'/views/service.php');
        }
        else
        {
            require_once(ROOT.'/views/404.php');
        }

    }

}
