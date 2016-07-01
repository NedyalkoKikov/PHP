<!DOCTYPE html>
    <head>
    <body>
        <?php
        $count = 5;
        echo $count+1;
        echo "<br>";
        echo gettype($count);
        echo "<br>";
        $count = 5 . 5;
        echo $count;
        echo "<br>";
        echo gettype($count);
        echo $count;
        var_dump($count);
        ?>
    </body>
</head>