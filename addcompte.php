<?php

$servername = "db:3306";
$username = "root";
$password = "a";
$dbname = "compte";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$idClient = $_POST['idClient'];
$numero_compte = $_POST['numero_compte'];
$solde = $_POST['solde'];	
$sql = "INSERT INTO compte (numero_compte, solde, idClient) VALUES ($numero_compte, $solde, $idClient)";
$result = $conn->query($sql);

if ($result == true) {
	echo "ajout de compte réussi";
}else{
	echo "erreur";
}

$conn->close();

?>
<br>
<br>
<br>

<a href="index.php"> retour</a><br>