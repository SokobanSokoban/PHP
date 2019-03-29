<?php
namespace App\modules;

class Good extends Model
{
    use CalcRows;

    public $id;
    public $name;
    public $price;

    protected function getTableName(): string
    {
        return 'goods';
    }

}