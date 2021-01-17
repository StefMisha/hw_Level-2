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
    private $price;
    private $amount;
    private $name;

    public function __constract($price, $amount, $name)
    {
        self::setPrice($price);
        $this->amount = $amount;
        $this->name = $name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price = 0)
    {
        $this->price = $price;
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
        return $this->totalCost() / 100 * 10;
    }
    public function getName()
    {
        return $this->name;
    }
    public function showMe()
    {
        echo "Название: {$this->getName()} по цене: {$this->getPrice()} шт {$this->getAmount()}, {$this->totalCost()}, {$this->profit()}";
    }
}


$rObj = [
    new ProductReal(15, 5, 'doshik'),
    new ProductReal(230, 2, 'Beef'),
];

foreach ($rObj as $product) {
    echo $product->showMe() . "<br>";
}

/*
echo $rObj->totalCost() . "<hr>";
echo $rObj->profit() . "<hr>";

/*

$product = [
    new Product('doshik', 15),
    new Product('Beaff', 3000),
];

foreach ($product as $product) {
    echo  $product->show();
}



/*
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function show()
    {
        echo "Вывод продуктов: {$this->name}, по цене {$this->price}<br>";
    }
}

class Category extends Product
{
    public $category;

    public function __construct(string $name, int $price, string $category)
    {
        parent::__construct($name, $price);
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category; //внутри класса
    }

    //вывел одним методом, можно убрать методы выше, и выводить ниже через сущности.

    public function showMe()
    {
        return "Продукт: {$this->getName()} по цене: {$this->getPrice()} из категории: {$this->category}";
    }
}

//выведем данные из родительского класса
$product = [
    new Product('doshik', 15),
    new Product('Beaff', 3000),
];

foreach ($product as $product) {
    echo  $product->show();
}

$product = [
    new Category('doshik', 15, 'Бастрое приготовление'),
    new Category('Beaff', 3000, 'Meat'),
];

echo '<hr>Товары с категорией: <hr>';

foreach ($product as $product) {

    echo  $product->showMe() . "<br>";
}
*/