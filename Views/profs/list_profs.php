
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
                    <strong class="text-gray-dark" style="font-size: 20px;"><?= $prof['nom']?> <?= $prof['prenom']?>
                    <?php if ($_SESSION["status"] == 'admin') {?> 
                    <a href="./index.php?page=Ctrl_profs&view=edit&id=<?= $prof['id']?>" title="Modifier information" class="mr-5 mt-3 text-success" ><img src="./assets/img/modify.png" alt="img_modify" style="width:25px;"></a>
                    <?php  } ?>
                    </strong>
                    <a href="./index.php?page=Ctrl_profs&view=details&id=<?= $prof['id']?>" title="Details sur <?= $prof['nom']?>" class="mr-5 mt-3" style="font-size: 16px;">Details</a>
                </div>
                <span class="d-block"><?= $prof['email']?></span>
        </div>
    </div>
    <?php  } ?>
    </div>

<?php } 
 else{
    echo '<script>alert("Vous êtes un etudiant, vous n\'y avez pas accès")</script>'; ?>

    <img src="./assets/img/oups.png" alt="Oups, accès refusé" class="img-thumbnail mx-auto d-block w-25 bg-dark" >
    <p class="text-center mt-2 text-danger">Seul les administrateur et les professeurs ont accès à cette page</p>

<?php  } ?>
    