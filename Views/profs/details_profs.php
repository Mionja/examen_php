<div class="container" style="border:1px solid white; border-radius:15px; width:50%;">
    <div class="media">
        <img src="./assets/uploaded_img/<?= $profs['photo']?>" alt="photo" class="mr-3 mt-3 rounded-circle" style="width:150px;height:150px;" onclick="requestFullscreen(this)">
        <div class="media-body mt-3">
            <h2 class="u"><?= $profs['nom']?> <span><?= $profs['prenom']?></span></h2>
            <div class="row mt-5">
                <div class="col ml-5">
                    <span class="ml-5">
                        <a href= "mailto:<?= $profs['email']?>" target="_blank" title="Envoyer un email à <?= $profs['nom']?> " class="text-danger">
                        <img src="./assets/img/send_email.png" alt="" class="pb-0"> <?= $profs['email']?></a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
            <h4>Module(s) enseigné(s) par ce prof:  </h4>
            <p>
            <div>
                <?php 
                  if ($modules != Null) {
                    foreach ($modules as $m) {
                        echo '<span class="ml-5">'.$m['nom'].'</span>';
                    }
                  }  
                  else{
                    echo  "Processus d'assignement de module encore en cours ";
                  } 
                ?>
                
            </div>
            </p>
    </div>
    <?php if ($_SESSION["status"] == 'admin') {?> 
    <div class="row mt-5">
            <h5 class="col-4">Addresse: </h5>
            <span class="col-2"><?= $profs['adresse']?></span>
    </div>
    <div class="row mt-3">
            <h5 class="col-4"> Téléphone: </h5>
            <span class="col-2"><?= $profs['tel']?></span>
    </div>
    <div class="row mt-3">
            <h5 class="col-4"> Réseaux sociaux: </h5>
            <span class="col-2"><?= $profs['reseau']?></span>
    </div>
    <?php  } ?>
</div>

<div class="col text-center mt-3">
    <a href="./index.php?page=Ctrl_profs" class="btn btn-outline-dark">Liste des profs</a>
</div>
