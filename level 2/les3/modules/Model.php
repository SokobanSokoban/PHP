<?php
namespace App\modules;

use App\services\BD;

abstract class Model
{
    /**
     * @var BD
     */
    protected $bd;

    public function __construct()
    {
        $this->bd = BD::getInstance();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";
        return $this->bd->find($sql, ['id' => $id])[0];
    }

    //новый метод выозвращает объект
    public function findObject($id, $className)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";
        return $this->bd->findObject($sql, ['id' => $id], $className);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->getTableName()} ";
        return $this->bd->findAll($sql, []);
    }


    
    //Метод по удалению элемента из базы
    public function delete($id)
    {
        $sql = "DELETE * FROM {$this->getTableName()} WHERE id = :id";
        return $this->bd->find($sql, ['id' => $id])[0];
    }

    //добавим метод для добавления 
    public function add(Model $ClassAdd)
    {

        // if !(ClassAdd instanceof Model) {
        //      return false;
        //  }
        
        //по хорошему , тут нужен цикл по параметрам класса, пока так
        $id    = $ClassAdd->id;
        $name  = $ClassAdd->$name;
        $price = $ClassAdd->$price;

        $sql = "INSERT INTO {$this->getTableName()} (id, name, price) VALUES (:id, :name, :price)";
        return $this->bd->findAll($sql, ['id' => $id,'name' => $name,'price' => $price]);
    }  
    
    public function update(Model $ClassAdd)
    {

        // if !(ClassAdd instanceof Model) {
        //      return false;
        //}
        
        //по хорошему , тут нужен цикл по параметрам класса, пока так
        $id    = $ClassAdd->id;
        $name  = $ClassAdd->$name;
        $price = $ClassAdd->$price;

        $sql = "UPDATE {$this->getTableName()} SET id=[:id], name=[:name], price=[:price] WHERE id = :id";
        return $this->bd->findAll($sql, ['id' => $id,'name' => $name,'price' => $price]);
    }
}