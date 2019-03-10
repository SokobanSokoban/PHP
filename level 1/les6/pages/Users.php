<?php
$content =<<<php
<h1>Пользователи</h1>
php;

$sql = "SELECT id, fio, login, password, date, count FROM users ";
$result = mysqli_query(connect (), $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $content .=<<<php
    <h3>{$row['login']}</h3>
    <p>{$row['password']}</p>
    <p><a href="?page=4&id={$row['id']}">Подробнее</a></p>
    <p><a href="?page=6&id={$row['id']}">Изменить</a></p>
    <p><a href="?page=5&id={$row['id']}">Удалить</a></p>
    <hr>
php;
}


