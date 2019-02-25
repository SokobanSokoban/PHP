<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <div class="task-block-teacher yobject-marked">

        <!--1-->
        <h3>1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:</h3>

        <ul>
            <li>если $a и $b положительные, вывести их разность;</li>
            <li>если $а и $b отрицательные, вывести их произведение;</li>
            <li>если $а и $b разных знаков, вывести их сумму;</li>
        </ul>

        <h3>Ноль можно считать положительным числом.</h3>

        <?php
        // переменные
        $a = 5;
        $b = 0;
        
        $txt = "";// будет показывать результат
        
        // функции операций
        function diff($a,$b){
            return ($a-$b);
        }
        
        function multiply($a,$b){
            return ($a*$b);
        }
       
        function sum($a,$b){
            return ($a+$b);
        }
         
        function div($a,$b){
            if ($b==0){
                echo " деление на ноль ";
            }
            else {
               return ($a/$b); 
            }
         }
        
        // основной модуль
        if ($a >= 0 && $b >= 0){
           $txt = "Разность ". diff($a,$b); 
        }else if ($a < 0 && $b <= 0){
           $txt = "Произведение  ". multiply($a,$b); 
        }else {
           $txt = "Сумма  ". sum($a,$b);  
        }
        ?>

        <h4> Пусть а =
            <?php echo  $a?>
        </h4>

        <h4> Пусть b =
            <?php echo  $b?>
        </h4>

        <h4>
            <?php echo  $txt?>
        </h4>

        <!--2-->
        <h3>2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</h3>

        <?php 
        switch ($a) {
            case 0:
                echo " а = 0";        
            case 1:
                echo " а = 1";        
            case 2:
                echo " а = 2";        
            case 3:
                echo " а = 3";        
            case 4:
                echo " а = 4";        
            case 5:
                echo " а = 5";        
            case 6:
                echo " а = 6";        
            case 7:
                echo " а = 7";        
            case 8:
                echo " а = 8";        
            case 9:
                echo " а = 9";        
            case 10:
                echo " а = 10";        
            case 11:
                echo " а = 11";        
            case 12:
                echo " а = 12";        
            case 13:
                echo " а = 13";
            case 14:
                echo " а = 14";
            case 15:
                echo " а = 15";
        }
        ?>

        <!--3-->
        <h3>3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</h3>

        <!--4-->
        <h3>4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</h3>

        <?php 
        function mathOperation($arg1, $arg2, $operation){
            switch ($operation) {
                case "+":
                    return sum($arg1, $arg2);        
                case "-":
                    return diff($arg1, $arg2);       
                case "/":
                    return div($arg1, $arg2);         
                case "*":
                    return multiply($arg1, $arg2);        
           }  
         }
        
        $a = 3;
        $b = 0;
        
        $operation = "+";
        echo "". $a. $operation . $b ."=". mathOperation($a, $b, $operation);
        echo "<br>";  
            
        $operation = "*";
        echo "". $a. $operation . $b ."=". mathOperation($a, $b, $operation);
        echo "<br>"; 
        
        $operation = "/";
        echo "". $a. $operation . $b ."=". mathOperation($a, $b, $operation);
        echo "<br>"; 
        
        $operation = "-";
        echo "". $a. $operation . $b ."=". mathOperation($a, $b, $operation);
        echo "<br>"; 
        ?>

        <!--5-->
        <h3>5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</h3>
        <h4>
            <?php 
             $data = date("o");
             echo $data;
            ?>
        </h4>

        <!--6-->
        <h3>6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</h3>
        <?php 
            function power($val, $pow){
                
                if ($pow == 0){
                    return 1;
                }else if ($pow == 1) {
                    return $val;  
                }else {
                    $pow = $pow - 1;
                    return $val * power($val, $pow);  
                } 
            }
            
            $val = 2;
            $pow = 3;
            $res = power($val, $pow);
            echo "".$val." в степени ".$pow. " = ". $res;  
        ?>


        <!--7-->
        <h3>7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:</h3>

        <p>22 часа 15 минут<br>
            21 час 43 минуты</p>

        <?php 
                $h = date("H")-1;
                $m = date("i");
                
                function getStringMin($m){
                    if (($m<20) && ($m>10)){
                        $minutes = "минут";
                    }
                    else if (($m % 10) === 1) {
                        $minutes = "минута";
                    }
                    else if ((($m % 10)>=2) && (($m % 10)<=4)) {
                        $minutes = "минуты";
                    }
                    else {
                        $minutes = "минут";
                    }
                    return $minutes; 
                }
        
                function getStringHour($h){
                    if ($h==1 || $h==21) {
                        $hours = "час";
                    }
                    else if (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
                        $hours = "часа";
                    }
                    else {$hours = "часов";
                    }
                    
                    return $hours; 
                }
        
                function getStringTime($h, $m){
                    return $h . " ". getStringHour($h) . " " . $m . " ". getStringMin($m); 
                }
                 
            ?>

        <h4> Текущее время :
            <?php 
                echo getStringTime($h, $m);
            ?>
        </h4>
        <h4>тестовый пример 1:
            <?php 
                echo getStringTime(22, 15);
            ?>
        </h4>

        <h4>тестовый пример 2:
            <?php 
                echo getStringTime(21, 43);
            ?>
        </h4>
    </div>
</body>

</html>
