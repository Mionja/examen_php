<div class="container mt-5">
    <?php if ($_SESSION["status"] == 'admin') { ?>
        <div class="bg-white p-3 rounded">
            <div class="row">
                <div class="col-lg-4 mr-auto h3">Notifications</div>
                <div class="d-flex mr-3" role="search" action="#">
                    <input class="form-control mx-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>
            </div>
        </div>
        <div class="bg-white p-3 rounded mt-2">
            <div class="row d-flex justify-content-center">
                <a href="./index.php?page=notifications&action=deleteAll" class="btn btn-sm btn-outline-secondary w-75 mb-5">Tout marquer comme lu(Tout supprimer)</a>
            </div>
            <?php $i = Mdl_contact::list_data_i();
                    foreach ($i as $i) { ?>
            <div class="row">
                <div class="col-sm-2"><img src="./assets/img/mail.png" alt="mail"></div>
                <div class="col-sm-4"><a href= "mailto:<?= $i['email'] ?>" target="_blank"  class="text-dark"><?= $i['email'] ?></a></div>
                <div class="col-sm-4"><?= $i['message'] ?></div>
                <div class="col-sm-2"><a href="./index.php?page=notifications&action=delete&id=<?= $i['id'] ?>">Effacer</a></div>
                
            </div>
            <hr>
            <?php   } if (count($i) == 0){ ?>
                <div class="text-center">
                    <div class="h1 font-weight-light">Vous n'avez aucune notification.</div>
                </div>
            <?php } ?>
        </div>












        <!-- <div class="jumbotron jumbotron-fluid">
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
                    $i = Mdl_contact::list_data_i();
                    foreach ($i as $i) { ?>
                        <tr>
                            <td><a href= "mailto:<?= $i['email'] ?>" target="_blank"  class="text-dark"><?= $i['email'] ?></a></td>
                            <td><?= $i['message'] ?></td>
                        </tr>
                    <?php   } ?>
                    </tbody>
                </table> -->

    <?php   } ?>
</div>