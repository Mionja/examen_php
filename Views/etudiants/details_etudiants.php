<div class="container" style="border:1px solid white; border-radius:15px; width:50%;">
    <div class="media">
        <img src="./assets/uploaded_img/<?= $etudiant['photo']?>" alt="photo" class="mr-3 mt-3 rounded-circle" style="width:150px;height:150px;" onclick="requestFullscreen(this)">
        <div class="media-body mt-3 ">
            <h2 class="ml-5"><?= $etudiant['nom']?> <span><?= $etudiant['prenom']?></span></h2>
            <div class="row mt-5">
                <div class="col ml-5">
                    <span class="ml-5">
                    <a href= "mailto:<?= $etudiant['email']?>" target="_blank" title="Envoyer un email à <?= $etudiant['nom']?> " class="text-danger">
                    <img src="./assets/img/send_email.png" alt="" class="pb-0"> <?= $etudiant['email']?></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
            <h5 class="col-4"> Date de naissance: </h5>
            <span class="col-2"><?= $etudiant['date_naissance']?></span>
    </div>
    <div class="row mt-3">
            <h5 class="col-4">Numéro CIN: </h5>
            <span class="col-2"><?= $etudiant['cin']?></span>
    </div>
    <div class="row mt-3">
            <h5 class="col-4"> Numéro téléphone: </h5>
            <span class="col-2"><?= $etudiant['tel']?></span>
    </div>
    <div class="row mt-3">
            <h5 class="col-4"> Compte facebook: </h5>
            <span class="col-2"><?= $etudiant['comptefb']?></span>
    </div>
   
</div>

<div class="col text-center mt-3">
    <a href="./index.php?page=Ctrl_etudiants" class="btn btn-outline-dark">Liste des etudiants</a>
</div>
