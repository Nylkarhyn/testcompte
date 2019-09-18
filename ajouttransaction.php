<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="POST" action="addtransaction.php" >

    idC : <input name="idC" type="number" value="<?php echo $_GET['idCompte'] ?>" /> <br>
    type d'opération :
    <SELECT name="type" size="1">
        <OPTION value="0">retrait</option>
        <OPTION value="1">depot</option>
    </SELECT>

    montant : <input name="montant" type="number"/><br>
    date de la transaction : <input name="dt" type="date"/> <br>

    <input type="Submit" value="envoyé" />

</form>
</body>
</html>