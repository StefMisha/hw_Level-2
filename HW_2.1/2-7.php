<?php
class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();
//при каждом обращении к методу foo  класса А, мы увеличиваем переменную х на 1, не обращая внимание на то что разные объекты, тк переменная Х является static
?>
<br>

<?php
class B
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}
class C extends B
{
}
$a1 = new B();
$b1 = new C();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
//почти тоже самое, но обращения идет от объектов из разных классов, что приводит к переопределению переменной Х, сначала а1 = 1, потом b1 = 1, и тд
?>
<br>
<?php
class D
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}
class E extends D
{
}
$a1 = new D;
$b1 = new E;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
//эээээээ....
?>