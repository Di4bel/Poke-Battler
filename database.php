<?php
require_once "db.php";
$db = new mysqli(
    "$databaseHostname",
    "$databaseUser",
    "$databasePassword",
    "$databaseName",
    "3306"
);

try {
    var_dump($db);
    mysqli_select_db($db,"$databaseName");
    $query = $db->query("Select * from users;");
    $result = $query->fetch_assoc();
    foreach ($result as $row){
        var_dump($row);
        echo "test";
    }
}catch (Exception $e){
    echo $e->getMessage();
}
