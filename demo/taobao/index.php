<?php
require '../../way/way_1/vendor/autoload.php';

// 1.需要采集网站的url;
$grab_url = 'https://s.taobao.com/search?app=mainSrp&q=iphone7&cd=false';

// 2.编写采集规则;
// $rules = array(
//     'title' => array('.item .ctx-box .title a', 'id'),
//     // 'url'   => array('.unit h1 a', 'href'),
//     // 'time'  => array('.unit h4 .ago', 'text'),
// );

// // 3.运行采集
// $data = QueryList::Query($grab_url, $rules)->data;

$data = getHtml($rel = true);

echo "<pre>";
print_r($data);
