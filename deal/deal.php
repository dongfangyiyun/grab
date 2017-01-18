<?php

function dealTags($tags)
{
    $tags = str_replace('标签：', '', $tags);
    $tag  = explode(' ', $tags);
    array_pop($tag);
    return $tag;
}

function dealAuthor($author)
{
    $author = str_replace('作者：', '', $author);
    return $author;
}

function dealContent($content)
{
    $content = substr($content, 0, strlen($content) - 12);
    return $content;
}

function dealImg($img)
{
    $img = 'http://www.helloweba.com/' . $img;
    return $img;
}

function dealUrl($url)
{
    $url = 'http://www.helloweba.com/' . $url;
    return $url;
}
