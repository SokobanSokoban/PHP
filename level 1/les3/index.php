<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #ebebeb;
            overflow-x: hidden;
            text-align: center;
        }

        header {
            width: 100%;
            height: 50px;
            background-color: #f44355;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        header>nav>div {
            float: left;
            width: 16.6666%;
            height: 100%;
            position: relative;
        }

        header>nav>div>a {
            text-align: center;
            width: 100%;
            height: 100%;
            display: block;
            line-height: 50px;
            color: #fbfbfb;
            transition: background-color 0.2s ease;
            text-transform: uppercase;
        }

        header>nav>div:hover>a {
            background-color: rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        header>nav>div>div {
            display: none;
            overflow: hidden;
            background-color: white;
            min-width: 200%;
            position: absolute;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            padding: 10px;
        }

        header>nav>div:not(:first-of-type):not(:last-of-type)>div {
            left: -50%;
            border-radius: 0 0 3px 3px;
        }

        header>nav>div:first-of-type>div {
            left: 0;
            border-radius: 0 0 3px 0;
        }

        header>nav>div:last-of-type>div {
            right: 0;
            border-radius: 0 0 0 3px;
        }

        header>nav>div:hover>div {
            display: block;
        }

        header>nav>div>div>a {
            display: block;
            float: left;
            padding: 8px 10px;
            width: 46%;
            margin: 2%;
            text-align: center;
            background-color: #f44355;
            color: #fbfbfb;
            border-radius: 2px;
            transition: background-color 0.2s ease;
        }

        header>nav>div>div>a:hover {
            background-color: #212121;
            cursor: pointer;
        }

        h1 {
            margin-top: 100px;
            font-weight: 100;
        }

        p {
            color: #aaa;
            font-weight: 300;
        }

        @media (max-width:600px) {
            header>nav>div>div>a {
                margin: 5px 0;
                width: 100%;
            }

            header>nav>div>a>span {
                display: none;
            }
        }

    </style>

</head>

<body>


    <div>
        <h3>1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.</h3>

        <?php
        $i = 0;
        while ($i < 99) {
            $i = $i+3;
            echo $i."<BR>";  
        }
        ?>

        <h3>2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:</h3>

        <p> 0 – это ноль.<br>
            1 – нечетное число<br>
            2 – четное число.<br>
            3 – нечетное число.<br>
            …<br>
            10 – четное число.</p>

        <?php 
        $i = 0;
        $fl = true;
        do{
            if ($i == 0){
                echo $i." – это ноль";
            }else{
                if ($fl){
                echo $i." – четное число";
                }else{
                echo $i." – нечетное число";
                }  
            }
            
            echo "<br>";
            
            $fl = !$fl;
            $i++; 
        }while($i<=10);
        ?>

        <h3>3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:</h3>

        <ul>
            <li>Московская область:</li>
            <li>Москва, Зеленоград, Клин
            </li>
            <li>Ленинградская область:</li>
            <li>Санкт-Петербург, Кронштадт
            </li>
            <li>Рязанская область
                …
                (названия городов можно найти на maps.yandex.ru)</li>
        </ul>

        <?php
            $arr = [
            "Московская область" => ["Москва", "Зеленоград", "Клин"],
            "Ленинградская область" => ["Санкт-Петербург", "Кронштадт"],
            "Рязанская область" => ["Рязань", "Луховицы"]    
            ];
        
        foreach ($arr as $key => $value) {
            echo "{$key}: ";
            echo "<Br>";
            
            if (is_array ($value)) {
              foreach ($value as $key2 => $value2){             
                echo "<li>{$value2}</li>";
               } 
            }
        }
        ?>

        <h3>4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=&gt; ’a’, ‘б’ =&gt; ‘b’, ‘в’ =&gt; ‘v’, ‘г’ =&gt; ‘g’, …, ‘э’ =&gt; ‘e’, ‘ю’ =&gt; ‘yu’, ‘я’ =&gt; ‘ya’).</h3>

        <p>Написать функцию транслитерации строк.</p>

        <?php
        mb_internal_encoding("UTF-8");
        
        function trans($textRus){
            $textTrans ='';
              
            $arr = [
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'e',
            'ж' => 'jg',
            'з' => 'z',
            'и' => 'i',
            'к' => 'k',
            'й' => 'y',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'h',
            'ц' => 'ch',
            'ш' => 'sh',
            'щ' => 'shh',
            'ь' => '`',
            'ы' => 'y',
            'ъ' => '``',
            'э' => 'e',
            'ю' => 'yu',
            'я' => 'ya'
            ];
            
            $len = mb_strlen($textRus);
            
            for($i=0; $i<$len; $i++){
                $key = mb_substr($textRus,$i,1);
                $sym = $arr[$key];
                
                if($sym ==null) {
                   $sym = $key; 
                };
                
                $textTrans = $textTrans . $sym;

            }
        return $textTrans;
        
        }
       
        echo trans("я не боюсь позора, давно позабыты амбиции! Мне плохо - приедет скорая, мне хорошо - полиция");
        ?>

        <h3>5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</h3>

        <?php
        mb_internal_encoding("UTF-8");
        
        function DelSpace($text){
            $textNew ='';
             
            $len = mb_strlen($text);
            
            for($i=0; $i<$len; $i++){
                $key = mb_substr($text,$i,1);
               
                $sym = $key;
                if($sym ==' ') {
                   $sym = '_'; 
                };
                
                $textNew = $textNew . $sym;
            }
        return $textNew;
        
        }
       
        echo DelSpace("я не боюсь позора, давно позабыты амбиции! Мне плохо - приедет скорая, мне хорошо - полиция");
        ?>


        <h3>6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.</h3>
        <?php
        $arr = ['Новости о спорте',
                'Новости о политике',
                'Новости о мире',
                'Новости о новостях',
                'Новости просто',
                'Даже и не новости',
                ];
        $menuNews = '';
        foreach ($arr as $key => $value) {
              $menuNews =   $menuNews . "<a>{$value}</a>";
        }
        
        echo "<header>
            <nav>
                <div>
                    <a><span>Главная</span></a>
                </div>
                <div>
                    <a><span>Новости</span></a>
                    <div>
                       {$menuNews}
                    </div>
                </div>
                <div>
                    <a><span>Контакты</span></a>
                </div>
                <div>
                    <a><span>Справка</span></a>
                </div>
            </nav>
        </header>"
            
        ?>
        <h3>7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:</h3>

        <p><code class="prettyprint">for (…){ // здесь пусто}</code></p>

        <?php 
          for ($i=0;$i<10; $i++ , print $i . ','){
              //тут пусто
          }  
         ?>

        <h3>8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».</h3>

        <?php
        
            $arr = [
            "Московская область" => ["Москва", "Зеленоград", "Клин"],
            "Ленинградская область" => ["Санкт-Петербург", "Кронштадт"],
            "Рязанская область" => ["Рязань", "Луховицы"]    
            ];
        
        foreach ($arr as $key => $value) {
            echo "{$key}: ";
            echo "<Br>";
            $head = 'К';
            
            if (is_array ($value)) {
              foreach ($value as $key2 => $value2){ 
                if($head == mb_substr($value2,0,1)){
                   echo "<li>{$value2}</li>"; 
                }  
  
               } 
            }
        }
        ?>
        <h3>9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).</h3>
        <?php
        
        function transDelSpace($textRus){
          $textNew ='';
          $textNew =  trans($textRus);
          $textNew = DelSpace($textNew);  
          return $textNew;  
        }
        
        echo transDelSpace("я не боюсь позора, давно позабыты амбиции! Мне плохо - приедет скорая, мне хорошо - полиция");
        ?>

    </div>

</body>

</html>
