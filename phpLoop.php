<!DOCTYPE html>
    <html>
        <head>
            <body>
            <?php
            function whileLoop(){
                $count = 1;
                while ($count <=10){
                    echo "<div>$count</div>";
                    $count++;
                }
            }
			function doWhile(){
				$count = 1;
				do{
					echo "<div>$count</div> <br>";
					$count++;
				}
				while($count < 10);
			}
			function forLoop(){
				for($a = 0;$a < 10;$a++){
					echo "<div>$a</div>";
				}
			}
			echo "<h2>While Loop</h2>";
            whileLoop();
			echo "<h2>Do While Loop</h2>";
			doWhile();
			echo "<h3>For Loop</h3>";
			forLoop();
            ?>
            </body>
        </head>
    </html>