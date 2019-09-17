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

?>