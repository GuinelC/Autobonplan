<?php include_once "pdo.php" ?>
<?php include_once "function.php" ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="main.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobonplan - ARRIVAGE</title>
</head>

<body>
    <div class="content">
        <section class="main-header">
            <div class="title">
                <h1>ARRIVAGE</h1>
            </div>
            <div class="user">
                <img id="user_photo" src="https://img.icons8.com/ios/452/user--v1.png" alt="">
                <div class="name"><span><span id="firstname"></span> <span id="lastname"></span></span> <a id="logout" href="https://www.autobonplan.com">Déconnection</a></div>
            </div>
        </section>
        <section class="nav">
            <div class="container-logo">
                <img src="https://communication.autobonplan.com/abp-home/img/Logo_Autobonplan.png" alt="">
            </div>
            <ul>
                <h4>hii</h4>
            </ul>
        </section>
        <div class="page-content">
            <h1>Hello Laury</h1>

            <?php $listcarbu = listcarburant(); ?>
            <?php foreach ($listcarbu as $Laliste) : ?>
                <?php echo $Laliste["Énergie"] ?>
            <?php endforeach ?>

            <br>

            <?php $listcarbu = listcarburant1(); ?>
            <?php foreach ($listcarbu as $Laliste) : ?>
                <?php echo $Laliste["Énergie"] ?>
            <?php endforeach ?>

            <br>

            <?php $listpuis = puiFiscal(); ?>
            <?php foreach ($listpuis as $listecv) : ?>
                <?php echo $listecv["Puissance_fiscale"] ?>
            <?php endforeach ?>

            <br>
            <br>

            <?php $Disponi = Dispo(); ?>
            <?php foreach ($Disponi as $dispoLe) : ?>
                <?php echo $dispoLe["Dispo_le"] ?>
            <?php endforeach ?>

            <br>
            <br>

            <?php $tabexo = tablexo(); ?>
            <?php foreach ($tabexo as $exotab) : ?>
                <?php echo $exotab["Immat"] ?> <?php echo $exotab["Marque"] ?> <?php echo $exotab["Modèle"] ?> <?php echo $exotab["Énergie"] ?> <?php echo $exotab["Date_entrée_en_arrivage"] ?> <?php echo $exotab["Fournisseur"] ?> <br>
            <?php endforeach ?>

        </div>
    </div>
</body>

</html>