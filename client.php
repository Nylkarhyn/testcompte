
<table>

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

$sql = "SELECT id, nom, prenom, date_de_naissance FROM client";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        echo "id: " . $row["id"] . " - Name: " . $row["nom"] . " " . $row["prenom"] . " " . " - date de naissance: " . $row["date_de_naissance"] . "<br>";
        echo '<a href="compte.php?user='. $row["id"] . '">afficher compte de ' . $row["id"] . '</a>';
        echo "<a href=\"ajoutcompte.php?idclient=".$row['id']."\"> ajouter un nouveau compte</a><br><br><br>";
    }
   
    
}else{
    echo "0 resultat";
}

echo '<a href="index.php"> retour</a><br>';

$conn->close();
?>
</table>