<?php
require 'vendor/autoload.php';

use QL\QueryList;

// 1.需要采集网站的url;
$grab_url = 'http://mobile.csdn.net/';

// 2.编写采集规则;
$rules = array(
    'title' => array('.unit h1 a', 'text'),
    'url'   => array('.unit h1 a', 'href'),
    'time'  => array('.unit h4 .ago', 'text'),
);

// 3.运行采集
$data = QueryList::Query($grab_url, $rules)->data;

echo "<pre>";
print_r($data);
