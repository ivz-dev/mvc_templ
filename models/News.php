<?php

class News
{
    public static function getNewsById($id)
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getVideo',
            'id' => $id
        ];
        $result = getData(api_url, $params);
        return $result;
    }

    public static function getNewsList($from, $count, $cat='')
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getList',
            'from' => $from,
            'count' => $count
        ];

        $list = getData(api_url, $params);
        return $list;
    }
    public static function getTopicList($topic, $from, $count)
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getTopicList',
            'topic' => $topic,
            'from' => $from,
            'count' => $count
        ];

        $list = getData(api_url, $params);
        return $list;
    }

    public static function getPopularVideo()
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getPopularVideo',
        ];
        $popular_list = getData(api_url, $params);
        return $popular_list;
    }

    public static function getRecentVideo()
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getRecentVideo',
        ];
        $recent_list = getData(api_url, $params);
        return $recent_list;
    }

    public static function getTopicTitle()
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getTopicTitle',
        ];
        $list = getData(api_url, $params);
        return $list;
    }

    public static function getVideoCount($topic)
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getVideoCount',
            'topic' => $topic
        ];
        $list = getData(api_url, $params);
        return $list;
    }

    public static function getSiteInformation()
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getSiteInformation',
        ];
        $recent_list = getData(api_url, $params);
        return $recent_list[0];
    }

    public static function getTopicPage($topic, $from, $count)
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getTopicPage',
            'topic' => $topic,
            'from' => $from*$count,
            'count' => $count
        ];

        $list = getData(api_url, $params);
        return $list;
    }

    public static function getMainPage($from, $count, $cat='')
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getMainPage',
            'from' => $from,
            'count' => $count
        ];

        $list = getData(api_url, $params);
        return $list;
    }

    public static function getInformationPage()
    {
        $params = [
            'token' => md5(domain),
            'subdomain' => subdomain,
            'action' => 'getInformationPage',
        ];
        $recent_list = getData(api_url, $params);
        return $recent_list;
    }
}
