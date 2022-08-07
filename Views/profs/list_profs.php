
<?php if ($_SESSION["status"] != 'etudiant') {?>    

    
    <div class="my-3 p-3 bg-white rounded box-shadow">
    <div class="border-bottom border-gray pb-2 mb-0"><h3>Liste des profs</h3> 
    <?php if ($_SESSION["status"] == 'admin') {?> 
        <small class="d-block text-right mt-3">
        <a href="./index.php?page=Ctrl_profs&view=add" class="btn btn-outline-info">Ajouter un prof</a>
        </small>
    <?php  } ?>
    </div>
    <?php foreach($profs as $prof) { ?>
    <div class="media text-muted pt-3">
          <img src="./assets/uploaded_img/<?= $prof['photo']?>" class="mr-2 rounded mt-2" style="width: 45px; height: 45px;" >
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <?php if ($_SESSION["status"] == 'admin') {?>     
        <small class="float-right mr-2" style="font-size: 20px;" ><a href="./index.php?page=Ctrl_profs&action=delete&id=<?= $prof['id']?>" title="Supprimer" class="text-danger">x</a> </small>
        <?php  } ?>
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark" style="font-size: 20px;">
                    
                    <a href="./index.php?page=Ctrl_profs&view=details&id=<?= $prof['id']?>" title="Details sur <?= $prof['nom']?>" class="mr-5 mt-3 text-dark" style="text-decoration: none;">
                    
                        <?= $prof['nom']?> <?= $prof['prenom']?></a>
                    <?php if ($_SESSION["status"] == 'admin') {?> 
                    </strong>
                    <a href="./index.php?page=Ctrl_profs&view=edit&id=<?= $prof['id']?>" title="Modifier information" class="mr-5 mt-3 text-info" style="font-size:15px;">Modifier</a>
                    <?php  } echo'</strong>';?>
                </div>
                <span class="d-block">
                    <a href= "mailto:<?= $prof['email']?>" target="_blank" title="Envoyer un email à <?= $prof['nom']?>" class="text-dark"><?= $prof['email']?></a>
                </span>
        </div>
    </div>
    <?php  } ?>
    </div>

<?php } 
 else{
    echo '<script>alert("Les etudiants n\'ont pas accès à cette page")</script>'; ?>

    <img src="./assets/img/oups.png" alt="Oups, accès refusé" class="img-thumbnail mx-auto d-block w-25 bg-dark" >
    <p class="text-center mt-2 text-danger">Seul les administrateur et les professeurs ont accès à cette page</p>

<?php  } ?>
    