<?php
namespace App\modules;

abstract  class Model
{
    protected $className = '������� ����';
    protected $disc = '�������� ��������';
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