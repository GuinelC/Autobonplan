<?php include_once "pdo.php" ?>
<?php include_once "function.php" ?>

<?php if (isset($_POST["destroy"])) {
    session_destroy();
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="main.css">
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- CDN Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobonplan - ARRIVAGE</title>
</head>

<body>
    <nav class="sticky-top navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- NAVBAR, SI USER est différent de la session(!@), alors faire apparaitre... -->
        <?php if (!@$_SESSION["user_role"]) { ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="fas fa-power-off"> </i> Sign in</a>
                </li>
            </ul>

        <?php } else {  ?>
            <!-- NAVBAR, SI Session ACTIV, faire apparaitre ceci -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item nav-log text-white">Bonjour <?php echo @$_SESSION["user_name"] ?> </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <form action="" method="POST">
                    <button class="btn btn-link" type="submit" name="destroy" value="enlever sessions"><i class="fas fa-sign-out-alt logout"></i> </button>
                </form>
            </ul>
        <?php   }  ?>
    </nav>