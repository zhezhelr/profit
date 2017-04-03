<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница с новостями</title>
</head>
<body>
    <h1>Все новости</h1>
    <hr />

    <ul>
        <?php
            foreach ($news as $article) : ?>
                <li><h2><?php echo $article->title; ?></h2></li>
                <li><h5><?php echo $article->text; ?></h5></li>
            <?php endforeach; ?>
    </ul>
</body>
</html>

