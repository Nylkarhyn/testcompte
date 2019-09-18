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



$idC = $_POST['idC'];
$type = $_POST['type'];
$montant = $_POST['montant'];
$dt = $_POST['dt'];
$sql = "INSERT INTO transactions (type, montant, date, idC) VALUES ($type, $montant, '$dt', $idC)";
$result = $conn->query($sql);
$sql2 = "SELECT solde FROM compte WHERE idC=$idC";
$result2 = $conn->query($sql2);
while ($row = $result2->fetch_assoc()) {
    $solde= $row["solde"];

}
if ($result == true) {

    if ($type == 0){
        $retrait = $solde - $montant;
        $sql = "UPDATE compte set solde = $retrait WHERE idC=$idC";
    }else {
        $depot = $solde + $montant;
        $sql = "UPDATE compte set solde = $depot WHERE idC=$idC";
    }
    $result3 = $conn->query($sql);
    echo "ajout de transaction réussi";
}else{
    echo "erreur";
}

$conn->close();

?>
<br>
<br>
<br>

<a href="client.php"> retour</a><br>