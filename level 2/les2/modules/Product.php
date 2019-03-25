<?php
namespace App\modules;

class Product extends Model
{
    protected $className = 'Продукт';
    protected $disc = 'основа всех товаров';

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

    public function __construct($article, $category, $title, $description, $size, $weight, $price, $country, $measure, $count)
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

        self::$objects[] = $this;
    }

    public function view()
    {
        echo "
            <hr><h2>Параметры</h2>
            <b>Артикул:</b> $this->article<br>
            <b>Категория:</b> $this->category<br>
            <b>Заголовок:</b> $this->title<br>
            <b>Описание:</b> $this->description<br>
            <b>Размер</b> $this->size<br>
            <b>Вес:</b> $this->weight ??<br>
            <b>Цена:</b> $this->price ???.<br>
            <b>Страна производитель</b> $this->country<br>
            <b>Единица измерения:</b> $this->count $this->measure.<br>
        ";
    }

    // списание товра
    public function removeFromStock($number)
    {
        echo "<hr><h2>Списание со склада</h2>";
        if (($this->count - $number) < 0) {
            echo "<b>Недостаточное количество товара на складе для списания: $number $this->measure.!</b><br>";
        } else {
            $this->count -= $number;
            echo "<b>Списание товара $this->title  $number . Выполненнео успешно!</b><br>";
        }
        echo "<b>Остаток на складе::</b> $this->count $this->measure.<br>";
    }
}