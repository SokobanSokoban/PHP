<?php

class PHP_Level_2
{
    protected $className = 'Базовый клас';
    protected $disc = 'Основной родитель';
    static $objects = [];

    public function getDesc()
    {
        return $this->className . '-' . $this->disc;
    }

    function __construct()
    {
        self::$objects[] = $this;
    }
}

class Product extends PHP_Level_2
{
    protected $className = 'Товар';
    protected $disc = 'Обычный товар, который мы продаем';

    public $id;
    public $article;
    public $category;
    public $title;
    public $description;
    public $size;
    public $weight;
    public $price;
    public $country;
    public $count;
    public $measure;

    public function __construct($article, $category, $title, $description, $size, $weight, $price, $country, $measure,$count)
    {
        $this->article = $article;
        $this->category = $category;
        $this->title = $title;
        $this->description = $description;
        $this->size = $size;
        $this->weight = $weight;
        $this->price = $price;
        $this->country = $country;
        $this->measure = $measure;
        $this->count = $count;
    }

    public function view()
    {
        echo "
            <hr><h2>Товар</h2>
            <b>Артикул:</b> $this->article<br>
            <b>Категория:</b> $this->category<br>
            <b>Наименование:</b> $this->title<br>
            <b>Описание:</b> $this->description<br>
            <b>Размер:</b> $this->size<br>
            <b>Вес:</b> $this->weight кг<br>
            <b>Цена:</b> $this->price руб.<br>
            <b>Страна-производитель:</b> $this->country<br>
            <b>Количество на складе:</b> $this->count $this->measure.<br>
        ";
    }

    // Списание товара со склада
    public function removeFromStock($number)
    {
        echo "<hr><h2>Списание со склада</h2>";
        if (($this->count - $number) < 0) {
            echo "<b>Недостаточное количество товара на складе для списания: $number шт.!</b><br>";
        } else {
            $this->count -= $number;
            echo "<b>Списание товара $this->title в количестве $number шт. выполнено успешно!</b><br>";
        }
        echo "<b>Остаток на складе:</b> $this->count шт.<br>";
    }
}



