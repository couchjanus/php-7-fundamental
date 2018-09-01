<?php

// regexp.preg.match.any.test.php

$regexp = "/к[а-яё]т/ui";

// строки, к которым мы будем по очереди применять регулярку
$lines = [
  'рыжий кот',
  'рыжий крот',
  'кит и кот',
  'blaha muha'
];

foreach ($lines as $line) {
    echo "Строка: $line\n";

    // сюда будет помещено первое
    // совпадение с шаблоном
    $match = [];
    if (preg_match($regexp, $line, $match)) {
        echo "+ Найдено слово '{$match[0]}'\n";
    } else {
        echo "- Ничего не найдено\n";
    }
}
