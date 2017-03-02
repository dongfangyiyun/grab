<?php
require 'vendor/autoload.php';

use QL\QueryList;

// 1.需要采集网站的url;
$grab_url = 'https://movie.douban.com/subject/26182910/?from=showing';

// 2.编写采集规则;
$rules = array(
	'title' => array('.comment-item .comment p', 'text'),
);

// 3.运行采集
$data = QueryList::Query($grab_url, $rules)->data;

echo "<pre>";
print_r($data);
