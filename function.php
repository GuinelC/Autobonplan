<?php
session_start(); // HYPER IMPORTANT !!

function listcarburant()
{
    global $connection;

    $sql = "SELECT * FROM Synthèse ORDER BY `Synthèse`.`Énergie` ASC";

    $sqh = $connection->prepare($sql);
    $sqh->execute();
    return $sqh->fetchAll();
}
 

function listcarburant1()
{
    global $connection;

    $sql = "SELECT * FROM Synthèse WHERE Énergie";

    $sqh = $connection->prepare($sql);
    $sqh->execute();
    return $sqh->fetch();
}

function puiFiscal()
{
    global $connection;

    $sql = "SELECT Puissance_fiscale FROM Synthèse";

    $sqh = $connection->prepare($sql);
    $sqh->execute();
    return $sqh->fetchAll();
}

function Dispo()
{
    global $connection;

    $sql = "SELECT Dispo_le FROM Synthèse";

    $sqh = $connection->prepare($sql);
    $sqh->execute();
    return $sqh->fetchAll();
}

function tablexo()
{
    global $connection;

    $sql = "SELECT Immat, Marque, Modèle, Énergie, Date_entrée_en_arrivage, Fournisseur FROM Synthèse";

    $sqh = $connection->prepare($sql);
    $sqh->execute();
    return $sqh->fetchAll();
}
?>  