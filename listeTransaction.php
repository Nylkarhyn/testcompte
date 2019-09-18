
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
            width: 25%;
            padding: 5px;
            background-color: #D0E3FA;
            background-image: url(sky.jpg);
        }
        td {
            font-family: sans-serif;
            border: thin solid #6495ed;
            width: 25%;
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
        <th>type de transaction</th>
        <th>montant</th>
        <th>date</th>


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

    /* if (isset($_GET['user'])) {
        $user=$_GET['user'];
        $sql = "SELECT idt, type, montant, date FROM `transaction` WHERE idC=$_GET["idCompte"]";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr> ";

            echo "<td>" . $row["idC"].  "</td><td>" . $row["type"]. "</td><td>" . $row["montant"]. "</td><td>" . $row["date"]. " </td>" ;
        //echo "<td>" . '<a href="ajouttransaction.php?idCompte='. $row['idC'] .' "> ajouter une nouvelle transaction</a>' . "</td>";

         echo "</tr>";
            }

        } else {
        echo "vas-y gitan viens pas foutre le bordel dans mon tierquar";
        }
    }else{
        echo "vas-y gitan viens pas foutre le bordel dans mon tierquar";
    } */



    $idC = $_GET["idCompte"];
    $sql = "SELECT * FROM transactions WHERE idC=$idC";
    $result = $conn->query($sql);




    while ($row = $result->fetch_assoc()) {
        $type = $row['type'];
        if ($type == 0){

            echo "<tr><td>" . $row["idC"].  "</td><td>" . $row["type"]. "</td><td>" . $row["montant"]. "</td><td>" . $row["date"]. " </td></b></tr>" ;
        }else{
            echo "<tr><b><td>" . $row["idC"].  "</td><td>" . $row["type"]. "</td><td>" . $row["montant"]. "</td><td>" . $row["date"]. " </td></b></tr>" ;
        }
    }

    ?>

</table>
<?php
echo '<a href="client.php"> retour</a><br>';
?>
</body>
</html>