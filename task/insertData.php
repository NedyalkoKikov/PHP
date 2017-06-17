
<?php
    include "DBConstants.php";
    $connection = mysqli_connect(DBConstants::$sqlConnection,DBConstants::$USERNAME,DBConstants::$PASSWORD,DBConstants::$DBNAME);
    if(!$connection){
        echo "Not connected";
    }
    $firstName = $_POST['inputFirstName'];
    $lastName = $_POST['inputLastName'];
    $favColor = $_POST['inputFavoriteColor'];
    $sql = "INSERT INTO user_info(first_name,last_name,favorite_color) VALUES ('$firstName','$lastName','$favColor')";
    $startQuery = mysqli_query($connection,$sql);
    if(!$startQuery){
        echo "Data not inserted";
    }else{
        echo "Inserted";
    }
    header("refresh:2; url=Forms.php");
?>