<?php

declare(strict_types=1);
error_reporting(E_ALL);

// $count = rand(2, 10);
// echo "Вывожу $count продукта(-ов) <br>";

class Product //создали класс продуктов
{
    protected $name;
    protected $price;

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

    //пробывал выводить через методы по отдельности

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
    new Product('doshik', rand(20, 40)),
    new Product('Beaff', rand(41, 50)),
];

foreach ($product as $product) {
    echo  $product->show();
}

$products = [
    new Category('doshik', $product->getPrice(), 'Бастрое приготовление'),
    new Category('Beaff', $product->getPrice(), 'Meat'),
];


foreach ($products as $productt) {

    echo $productt->showMe() . "<br>";
}








//$product = new Product("Pen", "100"); //выводит в любом случае потому что в классе конструктор есть шоу
//$product->show();//вывожу из класса метод 
