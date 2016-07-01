<!DOCTYPE html>
    <html>
<head>
    <body>
        <?php
         $month = date("M");
        if($month >= 6 && $month <= 8){
            echo "it is summer";
        }
        else{
            echo "not summer";
        }
        ?>
    </body>
</head>
</html>