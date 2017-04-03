<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();

$view->article = \App\Models\Article::findById($_GET['id']);

echo $view->render(
    __DIR__ . '/App/Templates/article.php'
);