<?php

require __DIR__ . '/autoload.php';

$article = new \App\Models\Article;
$article->title = 'Some text';
$article->insert();

var_dump($article);