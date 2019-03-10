<?php
$content =<<<php
<h1>Пользователь</h1>
php;

$sql = "SELECT id, fio, login, password, date, count 
        FROM users 
        WHERE id = $id";
$result = mysqli_query(connect (), $sql);
$row = mysqli_fetch_assoc($result);
    $content .=<<<php
    <h3>{$row['fio']}</h3>
    <p>{$row['fio']}</p>
    <hr>
php;



