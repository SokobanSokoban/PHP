<?php
namespace App\modules;


interface IModel
{
    /**
     * Возвращает название таблицы
     *
     * @return string
     */
    function getTableName(): string;
}