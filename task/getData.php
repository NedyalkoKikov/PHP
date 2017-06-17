<?php
include "DBConstants.php";
if(isset($_POST['search'])){
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `user_info` WHERE CONCAT(`ID`, `first_name`, `last_name`, `favorite_color`) LIKE '%".$valueToSearch."%'";
    $searchRes = filterTable($query);
}else{
    $query = "SELECT * FROM `user_info`";
    $searchRes = filterTable($query);
}
function filterTable($query){
    $startConnection = mysqli_connect(DBConstants::$sqlConnection,DBConstants::$USERNAME,DBConstants::$PASSWORD,DBConstants::$DBNAME);
    $filterResult = mysqli_query($startConnection,$query);
    return $filterResult;
}
?>