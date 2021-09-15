<?php include_once "header.php" ?>

<?php
if (isset($_POST["envoyertest"])) {
    @$Immat = htmlspecialchars($_POST["Immat"]);
    @$Marque = htmlspecialchars($_POST["Marque"]);
    @$Modèle = htmlspecialchars($_POST["Modèle"]);
    @$Énergie = htmlspecialchars($_POST["Énergie"]);
    @$Fournisseur = htmlspecialchars($_POST["Fournisseur"]);

    $testvoiture = addtest($Immat, $Marque, $Modèle, $Énergie, $Fournisseur);
    header('Location: index.php');
    echo "<script type=\"text/javascript\">alert('Votre voiture a bien été ajouter, Merci. ')</script>";
}
?>
<!-- <?php
        setlocale(LC_TIME, 'fr');
        $time = ucfirst(strftime('%A, %d '));
        $time .= ucfirst(strftime('%B, %Y'));
        echo ($time)
        ?> -->

<div class="content">
    <section class="main-header">
        <div class="title">
            <h1>ARRIVAGE</h1>
        </div>
        <div class="user">
            <img id="user_photo" src="https://img.icons8.com/ios/452/user--v1.png" alt="">
        </div>
    </section>

    <section class="nav">
        <div class="container-logo">
            <img src="https://communication.autobonplan.com/abp-home/img/Logo_Autobonplan.png" alt="">
        </div>
        <ul>
            <h4></h4>
        </ul>
    </section>

    <div class="page-content">
        <form action="" method="POST">
            <div class="form-filter">
                <select class="form-control btn-select" name="" onChange="submit()" id="">
                    <option>Votre choix</option>
                    <option value="1">Janvier</option>
                    <option value="2">Février</option>
                    <option value="3">Mars</option>
                    <option value="4">Avril</option>
                    <option value="5">Mai</option>
                    <option value="6">Juin</option>
                    <option value="7">Juillet</option>
                    <option value="8">Août</option>
                    <option value="9">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                </select>
                <br>

                <div class="btn-month">
                    <button type="submit" name="modifier" value="modifier" class="btn btn-success btn-sm">Modifier</button>
                </div>
                <br>
            </div>
        </form>

        <div class="container tab col-10">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">IMMAT</th>
                        <th scope="col">MARQUE</th>
                        <th scope="col">MODELE</th>
                        <th scope="col">ENERGIE</th>
                        <th scope="col">DATE ENTREE</th>
                        <th scope="col">FOURNISSEUR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $tabexo = tablexo(); ?>
                    <?php foreach ($tabexo as $exotab) : ?>
                        <tr>
                            <th scope="row"><?php echo $exotab["Immat"] ?></th>
                            <td><?php echo $exotab["Marque"] ?></td>
                            <td><?php echo $exotab["Modèle"] ?></td>
                            <td><?php echo $exotab["Énergie"] ?></td>
                            <td><?php echo $exotab["Date_entrée_en_arrivage"] ?></td>
                            <td><?php echo $exotab["Fournisseur"] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <br>
        <hr>

        <?php if (@$_SESSION["user_role"] == 1) { ?>
            <!-- FORM -->
            <div class="Form-add">
                <h1 class="form-heading">Enregistrer vos nouvelles données</h1>
                <form action="" method="POST">
                    <div class="form-test">
                        <div class="input-bdd">
                            <input type="text" name="Immat" class="btn btn-dark" value="" placeholder="Immat">
                            <input type="text" name="Marque" class="btn btn-dark" value="" placeholder="Marque">
                            <input type="text" name="Modèle" class="btn btn-dark" value="" placeholder="Modèle">
                            <input type="text" name="Énergie" class="btn btn-dark" value="" placeholder="Énergie">
                            <input type="text" name="Fournisseur" class="btn btn-dark" value="" placeholder="Fournisseur">
                            <br>
                        </div>
                        <div class="">
                            <input type="submit" class="btn btn-primary" name="envoyertest" value="Ajouter" required>
                        </div>
                </form>
            </div>
        <?php } ?>
        <br>

        <?php include_once "footer.php" ?>