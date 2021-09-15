<?php
session_start(); // HYPER IMPORTANT !!

// Récup de données, table Synthèse
function tablexo()
{
    global $connection;

    $sql = "SELECT Immat, Marque, Modèle, Énergie, Date_entrée_en_arrivage, Fournisseur FROM Synthèse";

    $sqh = $connection->prepare($sql);
    $sqh->execute();
    return $sqh->fetchAll();
}

//////////////////////////////////////////
// INSCRIPTION USER BDD
// Dans la BDD, vérifier dans la table (user). Lors de l'inscription la valeur la défault...
function addUser($name, $mail, $pass)
{
    global $connection;

    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (user_name, user_mail, user_pass) 
            VALUES (:user_name, :user_mail, :user_pass)";

    $sth = $connection->prepare($sql);

    $sth->execute(array(
        ':user_name' => $name,
        ':user_mail' => $mail,
        ':user_pass' => $pass_hash,
    ));

    header('Location: ./login.php');                    
}

//////////////////////////////////////////
// CONNEXION USER 
function login($mail, $pass)
{
    global $connection;

    $sql = "SELECT * FROM user WHERE user_mail = '$mail' LIMIT 1";

    $sth = $connection->prepare($sql);
    $sth->execute();
    $row = $sth->fetch();

    if ($row == false) {
        return false;
    } elseif (password_verify($pass, $row['user_pass'])) {

        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["user_name"] = $row["user_name"];
        $_SESSION["user_mail"] = $row["user_mail"];
        $_SESSION["user_pass"] = $row["user_pass"];
        $_SESSION["user_role"] = $row["user_role"];


        if ($_SESSION["user_role"] == 1) {
            header('Location: ./index.php'); // ADMIN // header = REDIRECTION // ADMIN
        }

        if ($_SESSION["user_role"] == 2) {
            header('Location: ./index.php');  // USER // header = REDIRECTION // index
        }
    } else {
        // si faux
        session_destroy();
        header('Location: ./login.php');
    }
}

//////////////////////////////////////////
// Récup Mounth
function takeMonth()
{
    global $connection;

    $sql = "SELECT * FROM Synthèse WHERE convert(datetime, Date_entrée_en_arrivage, 103) >= '2021/09/23' ";

    $sqh = $connection->prepare($sql);
    $sqh->execute();
    return $sqh->fetchAll();
}

//////////////////////////////////////////
// ADD CAR BDD
function addCar($Immat, $Marque, $Modèle, $Énergie, $Date_entrée_en_arrivage, $Fournisseur)
{
    global $connection;

    $sql = "INSERT INTO Synthèse (Immat, Marque, Modèle, Énergie, Date_entrée_en_arrivage, Fournisseur) VALUES (?,?,?,?,?)";

    $sth = $connection->prepare($sql);

    $sth->execute(array(
        $Immat,
        $Marque,
        $Modèle,
        $Énergie,
        $Date_entrée_en_arrivage,
        $Fournisseur,
        ));
}

//////////////////////////////////////////
// ADD CAR BDD
function addtest($Immat, $Marque, $Modèle, $Énergie, $Fournisseur)
{
    global $connection;

    $sql = "INSERT INTO Synthèse (Immat, Marque, Modèle, Énergie, Fournisseur) VALUES (?,?,?,?,?)";

    $sth = $connection->prepare($sql);

    $sth->execute(array(
        $Immat,
        $Marque,
        $Modèle,
        $Énergie,
        $Fournisseur,
        ));
}
?>  