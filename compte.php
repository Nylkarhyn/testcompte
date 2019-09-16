<html>

<head>
    <style>


        table {
            border: medium solid #6495ed;
            border-collapse: collapse;
            width: 50%;
        }
        th {
            font-family: monospace;
            border: thin solid #6495ed;
            width: 30%;
            padding: 5px;
            background-color: #D0E3FA;
            background-image: url(sky.jpg);
        }
        td {
            font-family: sans-serif;
            border: thin solid #6495ed;
            width: 30%;
            padding: 5px;
            text-align: center;
            background-color: #ffffff;
        }
        caption {
            font-family: sans-serif;
        }
    </style>
</head>
<body>


<table>

<tr>
    <th>id compte</th>
    <th>numero de compte</th>
    <th>solde</th>
</tr>
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

if (isset($_GET['user'])) {
    $user=$_GET['user'];
    $sql = "SELECT idC, numero_compte, solde, idClient FROM `compte` WHERE idClient=$user";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr> ";

        echo "<td>" . $row["idC"].  "</td><td>" . $row["numero_compte"]. "</td><td>" . $row["solde"]. " </td>" ;
     echo "</tr>";
        }

    } else {
    echo "vas-y gitan viens pas foutre le bordel dans mon tierquar";
    }
}else{
    echo "vas-y gitan viens pas foutre le bordel dans mon tierquar";
}


$conn->close();
?>
</table>
<?php
echo '<a href="index.php"> retour</a><br>';
?>
</body>
</html>