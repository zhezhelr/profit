<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
</head>
<body>
<div>
    <a href="/App/Admin/add.php">Добавить новость</a>
    <?php foreach ($news as $article): ?>
        <div>
            <h2><?php echo $article->title; ?></h2>
            <p><?php echo $article->text; ?></p>
            <a href="/App/Admin/edit.php?id=<?php echo $article->id; ?>">Редактировать</a>
            <a href="/App/Admin/del.php?id=<?php echo $article->id; ?>">Удалить</a>

        </div>
    <?php endforeach;?>
</div>
</body>
</html>

