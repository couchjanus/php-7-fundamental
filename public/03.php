<html>
   <head>
      <title>PHP-7 Script Strict mode</title>      
   </head>
   
   <body>
      
        <?php

        echo "<h1>Hello, PHP-7 Strict mode!</h1>";

        // Strict mode
        declare(strict_types=1);
        
        function sum(int ...$ints)
        {
            return array_sum($ints);
        }
        print(sum(2, '3', 4.1));
        ?>
   </body>
</html>