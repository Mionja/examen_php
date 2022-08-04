<div class="h2 text-center font-weight-light text-uppercase" style="font-style:italic">Liste  des modules</div>
<hr>
<table class="table table-striped">
    <thead class="text-center">
    <tr>
        <th>Nom</th>
        <th>Code</th>
        <th>Heure</th>
        <?php if ($_SESSION["status"] != 'etudiant') {?>  
            <th>Enseignant</th>
        <?php } ?>    
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <th colspan="2">Action</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody class="text-center">
    <?php foreach($modules as $module) { ?>
    <tr>
        <td><?= $module['nom']?></td>
        <td><?= $module['code']?></td>
        <td><?= $module['heure']?></td>
        <?php if ($_SESSION["status"] != 'etudiant') {?>  
        <td><a href="/mine/PHP/index.php?page=Ctrl_profs&view=details&id=<?= $module['id_prof']?>" class="btn btn-sm " title="Details">Cliquez ici</a></td>
        <?php } ?>    
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <td><a href="/mine/PHP/index.php?page=Ctrl_modules&view=edit&id=<?= $module['id']?>" class="btn btn-sm ">Modifier</a></td>
        <td><a href="/mine/PHP/index.php?page=Ctrl_modules&action=delete&id=<?= $module['id']?>" class="btn btn-sm text-danger ">Supprimer</a></td>
        <?php } ?>
    </tr>
    <?php } ?>
    </tbody>
</table>
<?php if ($_SESSION["status"] == 'admin') {?> 
<div class="text-center mb-3">
<a href="/mine/PHP/index.php?page=Ctrl_modules&view=add" class="btn btn-outline-info">Ajouter un module</a>
</div>
<?php } ?>