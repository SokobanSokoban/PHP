<?php
//$dir = '/img/';
//$maxImgDir = __DIR__.$dir;
//
//$maxImgName = scandir($maxImgDir, 1 );
//
//
//    for ( $i = 0; $i < count($maxImgName); $i++) {
//     
//        if ( $maxImgName[$i][0] != '.' && $maxImgName[$i][0] != '..' ) {
//  
//            echo   '<div class="img_block" >
//                    <a href="'.$dir.$maxImgName[$i].'" target="_blank">
//                    <img src="'.$dir.$maxImgName[$i].'" width="25%" alt="#"></a>
//                    </div>';
//        }
//
//    }
//
//

$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'gallery'); 


$query = "SELECT * FROM img ORDER BY click DESC";

$res = mysqli_query($link, $query) or die(mysqli_error($link));

$content = '<div class="container">';



while($row = mysqli_fetch_assoc($res)) {
    $content .= <<<php
    <div class="img_block" >
    <a href="?id={$row['id']}">
    <img src= {$row['path']}{$row['name']} width="25%" alt="#"></a>
    </div>
php;
}
$content .= '</div>';


?>
