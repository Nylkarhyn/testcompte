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

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dn = $_POST['dn'];
$sql = "INSERT INTO client (nom, prenom, date_de_naissance) VALUES ('$nom', '$prenom', '$dn')";
$result = $conn->query($sql);


if ($result == true) {
    echo "ajout de client réussi";
}else{
    echo "erreur";
}

$conn->close();

?>
<br>
<br>
<br>

<a href="index.php"> retour</a><br>
