<?php

declare(strict_types=1);
error_reporting(E_ALL);


//создали абстарктный класс продуктов
abstract class Product
{
    abstract public function totalCost(); //сумма товара
    abstract public function profit(); //доход от продажи
}

//потомок реальный товар с данными и расчетом

class ProductReal extends Product
{
    protected $price = 100;
    protected $amount = 2;

    public function __constract($price, $amount)
    {
        $this->price = $price;
        $this->amount = $amount;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function totalCost()
    {
        return $this->price * $this->amount;
    }
    public function profit()
    {
        return $this->totalCost() * 0.1;
    }
}

$rObj = new ProductReal('');
echo "Сумма товара: {$rObj->totalCost()} <br>";
echo "Выручка от продажи товара: {$rObj->profit()} <hr>";

class ProductD extends ProductReal
{
    public function getPrice()
    {
        return parent::getPrice() / 2;
    }
    public function totalCost()
    {
        return $this->getPrice() * parent::getAmount();
    }
    public function profit()
    {
        return $this->totalCost() * 0.1;
    }
}
$dObj = new ProductD('');
echo "Сумма электронного товара: {$dObj->totalCost()} <br>";
echo "Выручка от продажи электронного товара: {$dObj->profit()} <hr>";

//Весовой товар

class ProductA extends Product
{
    protected $price;
    protected $weight;
    public function __construct($price, $weight)
    {
        $this->price = $price;
        $this->weight = $weight;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getWeight()
    {
        return $this->weight;
    }
    public function totalCost()
    {
        return $this->getPrice() * $this->getWeight();
    }
    public function profit()
    {
        return $this->totalCost() * 0.1;
    }
}

$aObj = new ProductA(100, 10);
echo "Сумма весового товара: {$aObj->totalCost()} <br>";
echo "Выручка от продажи весового товара: {$aObj->profit()} <hr>";
