<?php

$query = "SELECT * FROM img ORDER BY click DESC";

$res = mysqli_query(connect (), $query) or die(mysqli_error($link));

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
