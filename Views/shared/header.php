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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="./index.php?page=Ctrl_acceuils">Dev learning</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
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
            </div>
            <div class="col">
                <a href="./index.php" class="float-right btn btn-sm btn-danger">Deconnexion</a>
            </div>
        </nav>
    </header>
    <div class="container mt-5 mb-5">