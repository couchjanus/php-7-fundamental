<?php

// regexp.preg.replace.test.php

$subject = "Email you sent was blaha@muha.com. Is it correct?";

// Замена не алфавитно-цифровых символов на разделитель

$subject = preg_replace('/[^\p{L}\p{Nd}]+/u', '-', $subject);

var_dump($subject);


// Убираем дубли разделителей

$subject = preg_replace('/(' . preg_quote('-', '/') . '){2,}/', '$1', $subject);

var_dump($subject);


$key = "http://my.com/home(/)";
print_r($key.PHP_EOL);
// Искомый шаблон. Может быть как строкой, так и массивом строк.

$pattern = preg_replace('#\(/\)#', '/?', $key); 

var_dump($pattern);

