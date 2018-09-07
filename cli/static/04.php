<?php

class A
{
  public function foo()
  {
    static $x = 0;
    echo ++$x;
  }
}

// Наследование класса (и метода) приводит к тому, 
// что всё-таки создается новый метод:

class B extends A
{
}

$a1 = new A;
$b1 = new B;

// Динамические методы в PHP существуют в контексте классов, а не объектов.
// И только лишь в рантайме происходит подстановка "$this = текущий_объект"

$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2