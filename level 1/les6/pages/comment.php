<?php

$sql = "SELECT * 
        FROM img 
        WHERE id = $id";

$result = mysqli_query(connect (), $sql);

$row = mysqli_fetch_assoc($result);
    $content .=<<<php
    <h3>{$row['fio']}</h3>
    <p>{$row['fio']}</p>
    <hr>
php;

$content = '<div class="container">';



while($row = mysqli_fetch_assoc($res)) {
    $content .= <<<php
    <div class="img_block" >
    <a href="?id={$row['id']}">
    <img src= {$row['path']}{$row['name']} width="25%" alt="#"></a>
    <p><a href="?page=9&id={$row['id']}">Отзыв</a></p>
    </div>
php;
}
$content .= '</div>';


?>