

<div class="my-3 p-3 bg-white rounded box-shadow">
    <div class="border-bottom border-gray pb-2 mb-0"><h3>Liste des etudiants</h3> 
    <?php if ($_SESSION["status"] == 'admin') {?> 
        <small class="d-block text-right mt-3">
        <a href="./index.php?page=Ctrl_etudiants&view=add" class="btn btn-outline-info">Ajouter un etudiant</a>
        </small>
    <?php  } ?>
    </div>
    <?php foreach($etudiants as $e) { ?>
    <div class="media text-muted pt-3">
          <img src="./assets/uploaded_img/<?= $e['photo']?>" class="mr-2 rounded mt-2" style="width: 45px; height: 45px;" >
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <?php if ($_SESSION["status"] == 'admin') {?>     
        <small class="float-right mr-2" style="font-size: 20px;" ><a href="./index.php?page=Ctrl_etudiants&action=delete&id=<?= $e['id']?>" title="Supprimer" class="text-danger">x</a> </small>
        <?php  } ?>
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark" style="font-size: 20px;"><?= $e['nom']?> <?= $e['prenom']?>
                    <?php if ($_SESSION["status"] == 'admin') {?> 
                    <a href="./index.php?page=Ctrl_etudiants&view=edit&id=<?= $e['id']?>" title="Modifier information" class="mr-5 mt-3 text-success" style="font-size: 16px;"><img src="./assets/img/modify.png" alt="img_modify" style="width:25px;"></a>
                    <?php  } ?>
                    </strong>
                    <a href="./index.php?page=Ctrl_etudiants&view=details&id=<?= $e['id']?>" title="Details sur <?= $e['nom']?>" class="mr-5 mt-3" style="font-size: 16px;">Details</a>
                </div>
                <span class="d-block"><?= $e['email']?></span>
        </div>
    </div>
    <?php  } ?>
    </div>