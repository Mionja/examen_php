<div id="container_home" class="bg-image">
<div class="jumbotron text-center w-75 mx-auto">
                <h1 class="display-4">Bienvenue sur notre site</h1>
                <p class="lead">Nous fournissons les informations dont vous cherchiez.</p>
                <?php if ($_SESSION["status"] == 'admin') {?> 
                <a href="#notif">Voir les notifications</a>
                <?php   }?>
            </div>
          <div class="container">
            <div class="row text-center">
                <div class="card col mx-2 bg-transparant <?php if (isset($_SESSION["status"]) && $_SESSION["status"] == "etudiant") { echo 'd-none';}?>" style="width: 18rem;">
                    <img class="card-img-top mt-2" src="./assets/img/etude.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nos profs</h5>
                        <p class="card-text">Cliquez ici pour retouver les informations concernant les professeurs</p>
                        <a href="index.php?page=Ctrl_profs" class="btn btn-danger hover">Voir la liste</a>
                    </div>
                </div>

                <div class="card col mx-2 bg-transparant" style="width: 18rem;">
                    <img class="card-img-top mt-2" src="./assets/img/books-1204029_1920.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nos modules</h5>
                        <p class="card-text">Cliquez ici pour retouver les informations concernant les modules</p>
                        <a href="index.php?page=Ctrl_modules" class="btn btn-success hover">Voir la liste</a>
                    </div>
                </div>

                <div class="card col mx-2 bg-transparant" style="width: 18rem;">
                    <img class="card-img-top mt-2" src="./assets/img/contact-us-2993000_1920.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nos contacts</h5>
                        <p class="card-text">Cliquez ici pour retouver les informations concernant les contacts</p>
                        <a href="index.php?page=Ctrl_contacts" class="btn btn-primary hover">Voir la liste</a>
                    </div>
                </div>

                <div class="card col mx-2 bg-transparant" style="width: 18rem;">
                    <img class="card-img-top mt-2" src="./assets/img/girl-new.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nos étudiants</h5>
                        <p class="card-text">Cliquez ici pour retouver les informations concernant les etudiants</p>
                        <a href="index.php?page=Ctrl_etudiants" class="btn btn-warning hover text-light">Voir la liste</a>
                    </div>
                </div>
            </div></div>

            <div class="container mt-5">
            <?php if ($_SESSION["status"] == 'admin') {?> 
                <div class="jumbotron jumbotron-fluid">
                <h1 class="ml-5" id="notif">Notifications:</h1>
            <div class="container">
                <h4>
                    Liste des personnes voulant s'inscrire:
                </h4>
                    <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach ($i as $i) {?>
                        <tr>
                            <td><a href= "mailto:<?= $i['email']?>" target="_blank"  class="text-dark"><?= $i['email'] ?></a></td>
                            <td><?= $i['message'] ?></td>
                        </tr>
                    <?php   }?>
                    </tbody>
                </table>
            
            <?php   }?>
            </div>


        </div>
                