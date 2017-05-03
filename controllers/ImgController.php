<?php

class ImgController
{
    public function actionGet($type, $id)
    {
        $imgId = explode('.', $id)[0];

        $url = "https://i.ytimg.com/vi/$imgId/$type.jpg";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Устанавливаем параметр, чтобы curl возвращал данные, вместо того, чтобы выводить их в браузер.
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);

        $im = imagecreatefromstring($data);

        if ($im!=false)
        {
            header('Content-Type: image/png');
            imagejpeg($im);
            imagedestroy($im);
        }
        else{
            header("HTTP/1.0 404 Not Found");
        }
    }
}