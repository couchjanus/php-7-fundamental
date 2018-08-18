<html>
   <head>
      <title>PHP-7 Script Strict mode</title>      
   </head>
   
   <body>
      
        <?php

        declare(strict_types = 1);
        echo "<h1>Invalid Return Type</h1>";

        function returnIntValue(int $value): int
        {
            return $value + 1.0;
        }
        print(returnIntValue(5));
        ?>
   </body>
</html>