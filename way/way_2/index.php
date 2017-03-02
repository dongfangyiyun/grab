<?php
require_once "phpQuery.php";

$articles = [];
for ($i = 1; $i <= 5; $i++) {
	$data = phpQuery::newDocumentFile('http://www.helloweba.com/index-' . $i . '.html');

	echo "<pre>";
	print_r($data);
	die;
	$artlist = pq(".blog_li");

	foreach ($artlist as $li) {
		$article = pq($li);
		$title = $article->find('h2 a')->text();
		$author = $article->find('.blog_txt p span:eq(0)')->text();
		$time = $article->find('.blog_txt p span:eq(1)')->text();
		$content = $article->find('.blog_txt .abstracts')->text();
		$tags = $article->find('.blog_txt p span:eq(2)')->text();
		$img = $article->find('.blog_img a img')->attr('src');
		$url = $article->find('h2 a')->attr('href');

		$articles[] = [
			'title' => $title,
			'author' => $author,
			'time' => $time,
			'content' => $content,
			'tags' => $tags,
			'img' => $img,
			'url' => $url,
		];
		break;
	}
	break;
}

echo "<pre>";
print_r($articles);
die;
