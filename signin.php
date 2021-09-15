<?php include_once "header.php" ?>

<?php
if (isset($_POST["inscription"])) { // Si bouton "envoyer" actif (S'INSCRIRE)

    @$name = htmlspecialchars($_POST["name"]); 
    @$mail = htmlspecialchars($_POST["mail"]);
    @$pass = htmlspecialchars($_POST["pass"]);

    @$addUser = addUser($name, $mail, $pass);
}
?>

<div class="container login">
    <form action="" method="POST">

        <div class="">
            <h1>INSCRIPTION</h1>
        </div>
        <br>

        <div class="form-group formlog">
            <div class="testlabel">Votre Nom</div>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1" required>
        </div><br>

        <div class="form-group formlog">
            <div class="testlabel">Votre Adresse Mail</div>
            <input type="text" name="mail" class="form-control" id="exampleInputPassword1" required>
        </div><br>

        <div class="form-group formlog">
            <div class="testlabel">Votre mot de passe</div>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
        </div><br>

        <button type="submit" value="inscription" name="inscription" class="btn sign btn-primary">S'inscrire</button>
    </form>
</div>

<?php include_once "footer.php" ?>