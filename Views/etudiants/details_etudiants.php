

    <div class="container">
        <h3 class="text-center" style="font-style:italic">Detail sur l'etudiant: <?= $etudiant['nom']?></h3>
        <hr>
    </div>

<div class="container ">
    <div class="media border p-3 bg-secondary">
        <img src="./assets/uploaded_img/<?= $etudiant['photo']?>" alt="photo" class="mr-3 mt-3 rounded-circle" style="width:150px;">
        <div class="media-body mt-3 ">
            <h2 class="ml-5"><?= $etudiant['nom']?> <span><?= $etudiant['prenom']?></span></h2>
            <div class="row mt-5">
                <div class="col ml-5">
                    <span class="ml-5"><a href= "mailto:<?= $etudiant['email']?>" target="_blank" title="Envoyer un email à <?= $etudiant['nom']?> " class="text-warning"><img src="./assets/img/send_email.png" alt=""> <?= $etudiant['email']?></a></span>
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
