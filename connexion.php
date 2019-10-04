<?php
// require 'connexion.php';
// $servername = "promo-29.codeur.online";
// $username = "erwannl";
// $password = "k1nO4J9w3nTNpA==";
// $dbname = "erwannl_take";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "take";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}

// $conn = null;
?>
