<?php
// class.04.test.php
// Объявление пространства имен
namespace App;

class MyClass
{
    // Class properties and methods go here   

    public $prop1 = "I'm a class property!";
    public $prop2 = "I'm a public property!";
    protected $prop3 = "I'm a protected property!";
    private $_prop4 = "I'm a private property!";
}

$instance = new \App\MyClass;

echo $instance->prop1; // Output the property
echo "\n\n";

// выражение $instance->$prop1 будет пытаться найти значение, присвоенное переменной по имени $prop1, а затем обратиться к свойству $instance–>значение
echo $instance->$prop1;
// PHP Notice:  Undefined variable: prop1 in /home/janus/www/php-7-fundamental/cli/class.04.test.php on line 22
// PHP Notice:  Undefined property: App\MyClass::$ in /home/janus/www/php-7-fundamental/cli/class.04.test.php on line 22


var_dump($instance->prop1);
