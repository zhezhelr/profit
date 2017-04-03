<?php

require __DIR__ . '/../autoload.php';

$article = \App\Models\Article::findById(1);

/*assert( is_object($article) );

assert( $article instanceof \App\Models\Article );
assert('Сенаторы предложили запретить работать гипермаркетам круглосуточно' == $article->title);
*/


$article->title = 'Тестовый заголовок';
$article->update;