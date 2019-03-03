<?php
$today = date("Y-m-d H:i:s");

$fileName = GetfileName();

SaveLog($fileName,$today);

function GetfileName(){
    $fileName = "log";
    $fileExt = ".txt";
    $fileNumber = 1;
    $count = 1;
   
    //проверяем наличие лог.cfg
    if (file_exists('log.cfg')){
       //если существует, то считываем инфо
       $arr = readCfg();
        
       $fileNumber = $arr[0];
       $count = $arr[1];
        
       if ($count < 10){
         //увеличиваем только число строк
         $count++;  
       }else{
         $count = 1;
         $fileNumber++;  
       }
        
        setCfg($fileNumber,$count);
    }else{
       //не существует, прописываем в него данные по следующему файле
       setCfg($fileNumber,$count); 
    }
    return $fileName.$fileNumber.$fileExt;
}

function readCfg($fileName='log.cfg'){
    $fp = fopen($fileName, "r"); // Открываем файл в режиме чтение
    
    if ($fp){
        while (!feof($fp))
        {
            $string = fgets($fp, 10);
            echo $string."<br />";
        }
    }else{
        echo "Ошибка при открытии файла";
    }
    
    fclose($fp);
    
    $arr = explode(";", $string);
    
    return $arr;
}


function setCfg($fileNumber,$count, $fileName='log.cfg'){
    //echo $count;
    
    $fp = fopen($fileName, "w"); // Открываем файл в режиме перезаписи
    $arr = getArrCfg($fileNumber,$count);
    $mytextLog = implode(";", $arr);
    
    $mytextLog = $mytextLog.$split; // Исходная строка
    $test = fwrite($fp, $mytextLog); // Запись в файл
    if ($test) {
        echo 'Данные в файл успешно занесены.';
        }else {
            echo 'Ошибка при записи в файл.';
        }
    fclose($fp); //Закрытие файла 
}

function getArrCfg($fileNumber,$count){
  return['fileNumber'=> $fileNumber,
        '$count'=>$count];  
}

function SaveLog($fileName = "log.txt", $mytextLog, $split="\r\n"){
    $fp = fopen($fileName, "a"); // Открываем файл в режиме записи
    $mytextLog = $mytextLog.$split; // Исходная строка
    $test = fwrite($fp, $mytextLog); // Запись в файл
    if ($test) {
        echo 'Данные в файл успешно занесены.';
        }else {echo 'Ошибка при записи в файл.';}
    fclose($fp); //Закрытие файла  
}
?>