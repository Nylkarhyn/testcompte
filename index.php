<html>
<head><title>application compte</title>
    <style>body {
    background-color: darkgrey;
    }
        p {
            color: black;
            size: A4;
        }
</style>

</head>
<body> <p><u>Application de gestion de comptes bancaire</u></p>
<br>


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

//$sql = "SELECT id from client";
//$result = $conn->query($sql);
//while($row = $result->fetch_assoc()) {
//echo '<a href="client.php?user='. $row["id"] . '">accéder à la liste client </a><br>';

echo '<a href="client.php"> liste clients</a><br>';
echo '<a href="ajoutclient.html"> ajouter un nouveau client</a><br>';
//echo '<a href="ajoutcompte.html"> ajouter un nouveau compte</a><br>';

//$sql = "SELECT id from client";
//$result = $conn->query($sql);
//while($row = $result->fetch_assoc()) {
 //   echo '<a href="compte.php?user='. $row["id"] . '">afficher compte de "' . $row["id"] . '</a><br>';
//}

?>
</body>
</html>