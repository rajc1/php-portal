<?php
try {
$connString = "mysql:host=localhost;dbname=id705934_user_info";
$user = "id705934_craj1";
$pass = "Rajnuts20";
$pdo = new PDO($connString,$user,$pass);
}
catch (PDOException $e) {
die( $e->getMessage() );
}

?>