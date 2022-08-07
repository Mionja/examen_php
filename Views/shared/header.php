<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/offcanvas.css">
    <link rel="stylesheet" href="./assets/js/offcanvas.js">
    <link rel="stylesheet" href="./assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="./assets/js/jquery.min.js">
    <link rel="stylesheet" href="./assets/js/popper.min.js">
    <title>Examen PHP</title>
</head>

<body>

    <header class="d-block">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a class="navbar-brand" href="./index.php?page=Ctrl_acceuils" style="font-family: 'Oleo Script Swash Caps', 'cursive'; font-size:1.8em;">E-anatra</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if (isset($_SESSION["status"]) && $_SESSION["status"] == "etudiant") {
                                                echo 'd-none';
                                            } ?>" href="index.php?page=Ctrl_profs">Professeurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Ctrl_etudiants">Etudiants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Ctrl_modules">Modules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Ctrl_contacts">Contacts</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto ">
                    <?php if ($_SESSION["status"] == 'admin') {?> 
                    <li class="nav-item"><a href="./index.php?page=notifications" class="mr-3" title="Voir vos notifications"><img src="./assets/img/jingle_bell.png" alt="" width="28"></a>
                    </li> <?php } ?>
                    <li class="nav-item">
                    <a href="./index.php?action=logout" class="btn btn-sm btn-danger mr-3">Deconnexion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container mt-5 mb-5">