<?php

function getData($api_url, $params)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"$api_url/get");
    curl_setopt($ch, CURLOPT_POST, 1);
    $params = http_build_query($params);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    return json_decode($server_output);
}

function parseUrl($content)
{
    $pattern = "~(http.*:\/\/([\w\d\.\?\&\#\;\:\+\-\=\%\/]+))~";


    $line = preg_replace_callback($pattern,
        function ($matches)
        {
            $link_title =
                [
                    'Click here',
                    'Here',
                    'There',
                    'At this point',
                    'Therein',
                    'Herein',
                    'Heraway',
                    'In this place',
                    'Over here',
                    'About here'
                ];

            return  "<span class='url' onclick=\"window.open('$matches[0]', '_blank')\"  rel=nofollow>".$link_title[rand(0, count($link_title)-1)]."</span>" ;
        },$content);

    return $line;
}

function clear($content)
{
    for($i=0; $i<strlen($content); $i++)
    {
        if(ord($content[$i])>127)
        {
            $content[$i] = " ";
        }
    }
    return $content;
}

function clearTitle($title)
{
    $pattern = array(',', '-', '\',','|', '/','%', '&', '?', '  ');
    $title = clear(str_replace($pattern, ' ', $title));
    return $title;
}

function getLid($description)
{
    $lid = '';
    if (strpos($description, '.')!==false)
    {
        $pos = strpos($description, '. ');
        $text  = substr($description, 0, $pos);

        if (strlen($text)<=300)
        {
            $lid = $text;
        }
        else
        {
            $lid = substr($text, 0, 300);
        }
    }
    else if (strpos($description, '.')===false&&strlen($description)>=300)
    {
        $lid = substr($description, 0, 300);
    }
    else if(strlen($description)<300){
        $lid = substr($description, 0, 300);
    }

    $pattern = "~(http.*:\/\/([\w\d\.\?\&\#\;\:\+\-\=\%\/]+))~";

    $lid = preg_replace_callback($pattern,
        function ($matches)
        {
            return  '';
        },$lid);


    return $lid;

}