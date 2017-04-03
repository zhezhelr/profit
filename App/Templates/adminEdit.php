<?php
$id = null;
if (!empty($_GET['id'])){
    $id = $_GET['id'];
}
$article = \App\Models\Article::findById($_GET['id']);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Редактировать новость</h2>
        <form action="/App/Admin/edit.php" method="post">
            <fieldset>
                <div>
                    <label>Заголовок новости</label>
                    <input type="text" name="news_title" id="news_title" value="<?php echo $article->title; ?>">
                </div>
                <div>
                    <label>Текст новости</label>
                    <textarea name="news_text" id="news_text" <?php echo $article->text; ?></textarea>
                </div>
                <input type="hidden" name="news_id" value="<?php echo $article->id; ?>">
                <input type="submit" name="submit" value="Обновить">
            </fieldset>
        </form>
    </div>
</body>
</html>

