<?php

// определение функции
function birth() {
  
  // определяем переменную age
  $age = 0;
  
  // Ключевое слово static — статическая локальная переменная
  // определяем переменную age как статическую
  // static $age = 0;

  //увеличиваем значение age на 1
  $age = $age + 1;
   
  // выводим на экран значение переменной
  
  echo "\nЗначение переменной age: $age\n";
  // echo "Значение статической переменной: $age<br>";
}

// вызываем дважды функцию
birth();
birth();