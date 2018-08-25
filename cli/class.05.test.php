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
    
    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }
    public function getProperty()
    {
        return $this->prop1 ;
    }

}

$instance = new \App\MyClass;
echo $instance->prop1; // Output the property
echo "\n\n";
$instance->setProperty("I'm a new property!");
$instance->getProperty();
var_dump($instance->prop1);
