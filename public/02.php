<html>
   <head>
      <title>PHP-7 Script Coercive mode</title>      
   </head>
   
   <body>
      
        <?php

        echo "<h1>Hello, PHP-7 Coercive mode!</h1>";

        // Coercive mode
        function sum(int ...$ints) 
        {
            return array_sum($ints);
        }
        print(sum(2, '3', 4.1));
        ?>
   </body>
</html>