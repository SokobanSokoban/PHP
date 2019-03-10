<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = PUBLIC_DIR . '/' . $_FILES['img']['name'];
    copy($_FILES['img']['tmp_name'], $file);
    header('Location: /');
    exit;
}

var_dump($_FILES);
$content =<<<php
<h1>Главная страница</h1>

<form enctype="multipart/form-data" method="post">
    Отправить этот файл: <input name="img" type="file">
    <input type="submit">
</form>
php;

