<?php 
require_once __DIR__ . "/../autoland.php";

$id_decrypt = decrypt($_GET['id']);

$sqld = "DELETE FROM brands WHERE id = :id"; // go zimam toj row so e stikliran so = {$_GET['id']}

$statement = $pdoconn->prepare($sqld); // za da ne dozvolime SQL injection 
$statement->execute(['id' => $id_decrypt]); // za da ne dozvolime SQL injection // pustam id_decrypt 


header("Location: indexlist.php");
die();

?>