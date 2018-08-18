<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>



<?php

/**
 * PHP version 7.2
 * 
 * @category Php
 * @package  Php_Project
 * @author   Janus Nic <janusnic@gmail.com>
 * @license  MIT License https://github.com/couchjanus/php7.2-fundamental/LICENSE
 * @link     https://github.com/couchjanus/php7.2-fundamental
 **/

// Примеры использования echo

echo "Привет мир!";

echo "Это займет
несколько строк. Переводы строки тоже
выводятся";
echo "Это займет\nнесколько строк. Переводы строки тоже\nвыводятся";

echo "Экранирование символов делается \"Так\".";

// с echo можно использовать переменные ...
$foo = "foobar";
$bar = "barbaz";

echo "foo - это $foo"; // foo - это foobar

// ... и массивы
$baz = array("value" => "foo");

echo "это {$baz['value']} !"; // это foo !

// При использовании одиночных кавычек выводится имя переменной, а не значение
echo 'foo - это $foo'; // foo - это $foo

// Если вы не используете другие символы, можно вывести просто значения переменных
echo $foo;          // foobar
echo $foo,$bar;     // foobarbarbaz

// Вместо конкатенации можно предать список аргументов, которые будут объединены
// в одну строку и обработаны как один аргумент
echo 'Эта ', 'строка ', 'была ', 'создана ', 'несколькими параметрами.', chr(10);
echo 'Эта ' . 'строка ' . 'была ' . 'создана ' . 'с помощью конкатенации.';
    
//

echo <<<EOT
Меня зовут "$name". Я печатаю $foo->foo.
Теперь я вывожу {$foo->bar[1]}.
Это должно вывести заглавную букву 'A': \x41
EOT;

echo <<<END
    Здесь используется синтаксис here document
    для вывода нескольких строк с подстановкой переменных
    $variable. Заметьте, что закрывающий идентификатор
    должен располагаться в отдельной строке. никаких пробелов!
END;
    
// Следующая строка неверна, так как echo не является функцией
($some_var) ? echo 'true' : echo 'false';

// Но это можно записать по другому
($some_var) ? print 'true' : print 'false'; 
// print также является конструкцией языка,
// но ведет себя как функция, поэтому она
// может быть использована в этом контексте.
echo $some_var ? 'true': 'false'; // echo вынесен за пределы выражения
                      
// require_once realpath(__DIR__).'/../bootstrap/bootstrap.php';                

$foo = "1";  // $foo - это строка (ASCII-код 49)
foo *= 2;   // $foo теперь целое число (2)
$foo = $foo * 1.3;  // $foo теперь число с плавающей точкой (2.6)
$foo = 5 * "10 Little Piggies"; // $foo - это целое число (50)
foo = 5 * "10 Small Pigs";     // $foo - это целое число (50)

$foo = "5bar"; // строка
$bar = true;   // булевое значение

settype($foo, "integer"); // $foo теперь 5   (целое)
settype($bar, "string");  // $bar теперь "1" (строка)

// Максимальное значение для "int" равно PHP_INT_MAX.

$foo = 10;   // $foo - это целое число
$bar = (boolean) $foo;   // $bar - это булев тип

$foo = 10;            // $foo - это целое число
$str = "$foo";        // $str - это строка
$fst = (string) $foo; // $fst - это тоже строка
// Это напечатает "они одинаковы"
if ($fst === $str) {
    echo "они одинаковы";
}

   
// Работает, начиная с версии PHP 5.3.0
const HELLO = 'Здравствуй, мир.';
const PI = 3.14;

define("NUMB", 3.1456);
define("CONSTANT", "Здравствуй, мир.");

echo CONSTANT; // выводит "Здравствуй, мир."
echo Constant; // выводит "Constant" и предупреждение.
    
echo HELLO;
print NUMB;
print PI;

define("MAXSIZE", 100);

echo MAXSIZE;
echo constant("MAXSIZE"); // результат аналогичен предыдущему выводу

print_r(get_defined_constants());

// Простой массив

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);
    
$array2 = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",);
var_dump($array2);

$array3 = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array3);

$array4 = array("foo", "bar", "hallo", "world");
var_dump($array4);

$array5 = array(
    "a",
    "b",
    6 => "c",
    "d",
);
var_dump($array5);

// Доступ к элементам массива с помощью квадратных скобок
$array6 = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
    "dimensional" => array(
    "array" => "foo"
    )
  )
);

var_dump($array6["foo"]);
var_dump($array6[42]);
var_dump($array6["multi"]["dimensional"]["array"]);
    

// И квадратные и фигурные скобки можно взаимозаменяемо использовать 
// для доступа к элементам массива 
// (то есть и $array[42] и $array{42} равнозначны).

$arr = array(5 => 1, 12 => 2);
$arr[] = 56;    // В этом месте скрипта это то же самое, что и $arr[13] = 56;
$arr["x"] = 42; // Это добавляет к массиву новый элемент с ключом "x"
unset($arr[5]); // Это удаляет элемент из массива
unset($arr);    // Это удаляет массив полностью

$array = array(1, 2, 3, 4, 5);    // Создаем простой массив.
    
print_r($array);
// Теперь удаляем каждый элемент, но сам массив оставляем нетронутым:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// Добавляем элемент (новым ключом будет 5, вместо 0).
$array[] = 6;
print_r($array);
// Переиндексация:
$array = array_values($array);
$array[] = 7;
print_r($array);

$earr[] = 'value';
print_r($earr);

// == это оператор, который проверяет эквивалентность и возвращает boolean
if ($action == "show_version") {
    echo "The version is 1.23";
}

?>
</body>
</html>
