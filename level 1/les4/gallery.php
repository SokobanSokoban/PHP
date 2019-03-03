<?php
$dir = '/img/';
$maxImgDir = __DIR__.$dir;

$maxImgName = scandir($maxImgDir, 1 );

//$filename = $maxImgDir .'1.jpg';
//
//if (file_exists($filename)) {
//    echo "Файл $filename существует";
//} else {
//    echo "Файл $filename не существует";
//}
    for ( $i = 0; $i < count($maxImgName); $i++) {
     
        if ( $maxImgName[$i][0] != '.' && $maxImgName[$i][0] != '..' ) {
  
            echo   '<div class="img_block" >
                    <a href="'.$dir.$maxImgName[$i].'" target="_blank">
                    <img src="'.$dir.$maxImgName[$i].'" width="25%" alt="#"></a>
                    </div>';
        }

    }


?>
