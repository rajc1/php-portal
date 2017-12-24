<?php
try {
$connString = "mysql:host=localhost;dbname=id705934_user_info";
$user = "root";
$pass = "root";
$pdo = new PDO($connString,$user,$pass);
}
catch (PDOException $e) {
die( $e->getMessage() );
}

?>