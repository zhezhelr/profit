<?php

require __DIR__ . '/../../autoload.php';
if (!empty($_POST['submit'])) {
    $article = \App\Models\Article::findById($_POST['news_id']);
    $article->title = $_POST['news_title'];
    $article->text = $_POST['news_text'];
    $article->save();
    header('Location: /Admin/index.php');
}
include __DIR__ . '/../Templates/adminEdit.php';

