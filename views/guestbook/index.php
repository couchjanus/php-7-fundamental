<?php
require_once VIEWS.'shared/head.php';
require_once VIEWS.'shared/navigation.php';
?>

<!-- Page Start -->
<h1></h1>
<?php
    // в следующем фрагменте применяется спецификатор преобразования %d, чтобы значение 33 отображалось в виде десятичного числа:
    printf("<h2>В Guest Book находится %d Comments</h2>", 33);

    // Если заменить %d на %b, значение 3 будет отображено в виде двоичного числа (11).
    printf("<h2>В Guest Book находится %b Comments</h2>", 33);
    
    // В функции printf можно использовать любое количество спецификаторов, если им передается соответствующее количество аргументов и если каждый спецификатор предваряется символом %. 
    printf("<h2>В Guest Book находится %d Comments, то есть %X в шестнадцатеричном представлении</h2>", 33, 33);

$message = <<<EOT
    <p>В Guest Book находится %d Comments, </p>
    <div>то есть %X в шестнадцатеричном представлении</div>
EOT;

    // printf($message, 33, 33);

    // printf("<h1 style='color: #%x%x%x'>Cat's GuestBook</h1>", 165, 27, 45);
    // Представление данных
    printf("Результат: $%.2f", 123.42 / 12);

    // Тег, позволяющий отображать все пустые пространства
    echo "<pre>"; 
    
    // Дополнение пробелами до 15 знако-мест
    printf("Результат равен $%15f\n", 123.42 / 12);
    
    // Дополнение нулями до 15 знако-мест
    printf("Результат равен $%015f\n", 123.42 / 12);
    
    // Дополнение пробелами до 15 знако-мест и вывод 
    // с точностью до двух десятичных знаков
    printf("Результат равен $%15.2f\n", 123.42 / 12);
    
    // Дополнение нулями до 15 знако-мест и вывод
    // с точностью до двух десятичных знаков
    printf("Результат равен $%015.2f\n", 123.42 / 12);
    
    // Дополнение символами # до 15 знако-мест и вывод 
    // с точностью до двух десятичных знаков
    printf("Результат равен $%'#15.2f\n", 123.42 / 12);
    
    echo "</pre>"; 
    
?>

<!--Section: Contact -->
<h2>Cat's <b>GuestBook</b></h2>   
<form class="cf" method="POST">
  <div class="half left cf">
    <input type="text" id="user-name" name="username" placeholder="Name">
    <input type="email" id="user-email" name="email" placeholder="Email address">
    <input type="text" id="input-subject" name="subject" placeholder="Subject">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>  
  <input type="submit" value="Submit" id="input-submit">
</form>

<!--Section: Contact -->

<!-- Page End -->
<div class="cf"></div>

<?php

// if ($_POST) {
//     echo '<hr>';
//     echo '<pre>';
//     echo htmlspecialchars(print_r($_POST, true));
//     echo '</pre>';
// }


// echo '<pre>';

// if ($result) {
//     echo $username;
//     echo $email;
//     echo $message;

// } else {
//     echo $error;
// }
// echo '</pre>';



// echo '<pre>';
// echo htmlspecialchars(print_r($comments, true));
// echo '</pre>';

// foreach ($comments as $key => $value) {
//   printf("<div class='top'><b>User [%s] </b> <a href='mailto:[%s]'>[%s]</a>  Added this: </div>", $value[0], $value[1], $value[1]);
//   printf("<div class='comment'>%s</div>", strip_tags($value[2]));

//   $posted = sprintf("<p>This post was made on %s</p>", strip_tags($value[3]));
//   echo $posted;
//   // printf("<div class='added_at'> At: %s</div>", strip_tags($value[3]));
// }


// if ($resCount>0) {
//     echo "<h3>$resCount comments:</h3> ";
    
//     foreach ($comments as $row) {
//       echo "<div class='top'><b>User ".$row["username"]."</b> <a href='mailto:".$row["email"]."'>".$row["email"]."</a> Added this </div>"; 
//       echo "<div class='comment'>".strip_tags($row["comment"])."</div>"; 
//       echo "<div class='added_at'> At: ".strip_tags($row["appended_at"])."</div>"; 
//     }
// }
// else {
//   echo "No comments.... ";
// }


echo "<pre>"; 
print_r($comments);
echo "</pre>"; 

?>

<?php require_once VIEWS.'shared/footer.php';
