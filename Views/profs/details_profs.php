    <div class="container">
        <h3 class="text-center" style="font-style:italic">Detail sur le professeur: <?= $profs['nom']?></h3>
        <hr>
    </div>

<div class="container ">
    <div class="media border p-3 bg-secondary">
        <img src="/mine/PHP/assets/uploaded_img/<?= $profs['photo']?>" alt="photo" class="mr-3 mt-3 rounded-circle" style="width:150px;">
        <div class="media-body mt-3">
            <h2 class="u"><?= $profs['nom']?> <span><?= $profs['prenom']?></span></h2>
            <div class="row mt-5">
                <div class="col ml-5">
                    <span class="ml-5"><a href= "mailto:<?= $profs['email']?>" target="_blank" title="Envoyer un email à <?= $profs['nom']?> " class="text-warning"><img src="/mine/PHP/assets/img/send_email.png" alt=""> <?= $profs['email']?></a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
            <h4>Liste des modules du prof: </h4>
            <p>
            <ul>
                <?php 
                  if ($modules != Null) {
                    foreach ($modules as $m) {
                        echo '<li>'.$m['nom'].'</li>';
                    }
                  }  
                  else{
                    echo  "Processus d'assignement de module encore en cours ";
                  } 
                ?>
                
            </ul>
            </p>
    </div>
    
</div>

<div class="col text-center mt-3">
    <a href="/mine/PHP/index.php?page=Ctrl_profs" class="btn btn-outline-dark">Liste des profs</a>
</div>
