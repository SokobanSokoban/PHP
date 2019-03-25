<?php
namespace App\modules;

class Product extends Model
{
    protected $className = '�����';
    protected $disc = '������� �����, ������� �� �������';

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
        //        ������ ���������
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
            <hr><h2>�����</h2>
            <b>�������:</b> $this->article<br>
            <b>���������:</b> $this->category<br>
            <b>������������:</b> $this->title<br>
            <b>��������:</b> $this->description<br>
            <b>������:</b> $this->size<br>
            <b>���:</b> $this->weight ��<br>
            <b>����:</b> $this->price ���.<br>
            <b>������-�������������:</b> $this->country<br>
            <b>���������� �� ������:</b> $this->count $this->measure.<br>
        ";
    }

    // �������� ������ �� ������
    public function removeFromStock($number)
    {
        echo "<hr><h2>�������� �� ������</h2>";
        if (($this->count - $number) < 0) {
            echo "<b>������������� ���������� ������ �� ������ ��� ��������: $number ��.!</b><br>";
        } else {
            $this->count -= $number;
            echo "<b>�������� ������ $this->title � ���������� $number ��. ��������� �������!</b><br>";
        }
        echo "<b>������� �� ������:</b> $this->count ��.<br>";
    }
}