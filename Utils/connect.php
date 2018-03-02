<?php
try {
	$servername = "kunet.kingston.ac.uk";
	$username = "k1553451";
	$password = "poo";
	$dbname = "db_k1553451";

	$pdo = new PDO(
	"mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>