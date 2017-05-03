<?php
return array(
    'news/([a-z0-9-]+)/([0-9]+)_([a-z0-9-]+)' => 'news/view/$1/$2_$3', // actionIndex in NewsController
    'category/([a-z]+)' => 'list/list/$1', // actionIndex in NewsController
    'category' => 'list/list/',
    'service/([a-z]+)' => 'news/service/$1',
    'img/([a-z]+)/((.*)(.jpg))' => 'img/get/$1/$2',
    'sitemap.xml' => 'sitemap/get',
    '' => 'list/main'
);